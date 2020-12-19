<?php

/**
 * @author Kristof Friess <kristof.friess@fh-erfurt.de>
 * @copyright Since 2018 by Kristof Friess
 * @version 1.0.0
 */


namespace dwp\core;

abstract class Model
{
    // useful types for schema
    const TYPE_STRING   = 'string';
    const TYPE_INTEGER  = 'int';
    const TYPE_UINTEGER = 'uint';
    const TYPE_DECIMAL  = 'dec';
    const TYPE_DATE     = 'date';
    const TYPE_JSON     = 'json';
    const TYPE_BOOL     = 'bool';
    const TYPE_TIMESTAMP= 'timestamp';
    const TYPE_TINYINT  = 'tinyint';

    protected $schema = [
    ];

    private $values = [
    ];

    public static function tablename()
    {
        $class = get_called_class();
        if(defined($class.'::TABLENAME'))
        {
            return $class::TABLENAME;
        }
        return null;
    }

    public static function find($where = '')
    {
        // Implement the find
        $db = $GLOBALS['db'];
        $result = null;

        try
        {
            $sql = 'SELECT * FROM' . self::tablename();

            if(!empty($where))
            {
                $sql .= ' WHERE ' . $where . ';';
            }
            $result = $db->query($sql)->fetchAll();
        }
        catch (\PDOException $e)
        {
            die('Select statement failed:' . $e->getMessage());  // TODO: fix Error Handle
        }
        return $result;
    }

    public static function findOne($where = '')
    {
        // Implement the find
        // Easy implementation of this method is, calling find() and reduce the array to one item or null
        return self::find($where)[0];
    }


    public function __construct($values)
    {
        // Write values using the magic methods
        // TODO: das muss man sich noch einmal angucken
        //       ich möchte eigentlich das schema einmal übernehmen
        //       und dann jedem attribut einen wert zuweisen
        foreach ($this->schema as $key) {
            $this->__set($key, $values);
        }

    }

    public function __set($key, $value)
    {
        // Check is the key in the schema?
        // If set the new value to the $this->values array
        if(isset($this->schema[$key]))
        {
            $this->schema[$key] = $value;
        }
    }

    public function __get($key)
    {
        // Check is the key in the schema?
        // If so return the value in values if not exists return default value from schema or null
        if(isset($this->schema[$key]))
        {
            return $this->schema[$key];
        }
    }

    public function __destruct()
    {
        // Free memory here
        $this->schema = null;
        $this->values = null;
    }

    public function insert()
    {
        // Implement insert
        $db =   $GLOBALS['db'];

        try
        {
            $sql    =   'INSERT INTO ' . self::tablename() . '( /*TODO: type,name,customer*/) VALUES (/*TODO: :type,:name,:customer*/)';

            $statement = $db->prepare($sql);
            /* TODO: ich will den folgenden text in eine for schleife packen
             * $statement->bindParam(':type', $this->type);
             * $statement->bindParam(':name', $this->name);
             * $statement->bindParam(':customer', $this->customer);
             */

            $statement->execute();
            return true;
        }
        catch(\PDOException $e)
        {
            die('Error inserting data: '.$e->getMessage());
        }
    }

    public function update()
    {
        //Implement update
        $db =   $GLOBALS['db'];

        try
        {
            $sql    =   'UPDATE ' . self::tablename() . 'SET /*TODO: column1 = value1, column2 = value2, ...' . 'WHERE --condition--';  //TODO: fix this shit

            $statement = $db->prepare($sql);
            /* TODO: ich will den folgenden text in eine for schleife packen
             * $statement->bindParam(':type', $this->type);
             * $statement->bindParam(':name', $this->name);
             * $statement->bindParam(':customer', $this->customer);
             */

            $statement->execute();
            return true;
        }
        catch(\PDOException $e)
        {
            die('Error inserting data: '.$e->getMessage());
        }

    }

    public function destroy()
    {
        //Implement destroy / delete
        $db = $GLOBALS['db'];

        try
        {
            $sql = 'DELETE FROM ' . self::tablename() . ' WHERE id = ' . $this->__get('id');
            $db->exec($sql);
            return true;
        }
        catch (\PDOException $e)
        {
            die('Error deleting data: '.$e->getMessage()); //TODO: Error handle
        }
        return false;
    }
}