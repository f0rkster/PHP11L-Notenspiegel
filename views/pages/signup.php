<div class="pages-signup">
	<div class="signup-wrapper">
		<h1>Konto erstellen</h1>

		<?php if($errMsg !== null) : ?>
			<div class="error-message">
				<?=$errMsg?>
			</div>
		<?php endif; ?>
		<form action="index.php?c=pages&a=signup" method="post">
			<div class="grid">
				<div class="row">
                    <div class="col-6">
                        <div class="input">
                            <label for="surname">
                                Vorname
                            </label>
                            <input id="surname" name="submit[surname]" type="surname" placeholder="Max" value="" required/>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input">
                            <label for="secondname">
                                Zweitname
                            </label>
                            <input id="secondname" name="submit[secondname]" type="secondname" placeholder="Michael" value="" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input">
                            <label for="name">
                                Name
                            </label>
                            <input id="name" name="submit[name]" type="name" placeholder="Mustermann" value="" required />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input">
                            <label for="gender">
                                Name
                            </label>
                            <select name="submit[gender]" id="gender" required>
                                <option hidden="hidden" selected value="">Geschlecht...</option>
                                <option value="male">männlich</option>
                                <option value="female">weiblich</option>
                                <option value="uni">divers</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input">
                            <label for="email">
                                E-Mail-Adress
                            </label>
                            <input id="email" name="submit[email]" type="email" placeholder="max@fh-erfurt.de" value="" required />
                        </div>
                    </div>
                    <div class="col">
                        <div class="input">
                            <label for="password">
                                Passwort
                            </label>
                            <input id="password" name="submit[password]" type="password" value="" required />
                        </div>
                    </div>
                    <div class="col">
                        <div class="input">
                            <label for="passwordValidate">
                                Passwort bestätigen
                            </label>
                            <input id="passwordValidate" name="submit[passwordValidate]" type="passwordValidate" value="" required />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input">
                            <label for="street">
                                Straße
                            </label>
                            <input id="street" name="submit[street]" type="street" placeholder="Musterstraße" value="" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input">
                            <label for="streetNumber">
                                Hausnummer
                            </label>
                            <input id="streetNumber" name="submit[streetNumber]" type="streetNumber" placeholder="123" value="" />
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="input">
                        <label for="city">
                            Stadt
                        </label>
                        <input id="city" name="submit[city]" type="city" placeholder="Musterstadt" value="" />
                    </div>
                </div>
                <div class="col-6">
                    <div class="input">
                        <label for="zipCode">
                            Stadt
                        </label>
                        <input id="zipCode" name="submit[zipCode]" type="zipCode" placeholder="12345" value="" />
                    </div>
                </div>
                <div class="col-6">
                    <div class="input">
                        <label for="phone">
                            Telefonnummer
                        </label>
                        <input id="phone" name="submit[phone]" type="phone" placeholder="1234/567890" value="" />
                    </div>
                </div>
                <div class="col-6">
                    <div class="input">
                        <label for="matriculationNumber">
                            Matrikelnummer
                        </label>
                        <input id="matriculationNumber" name="matriculationNumber" type="matriculationNumber" placeholder="1122334455" value="" required/>
                    </div>
                </div>
            </div>

			<div class="input submit">
				<input name="submit" type="submit" value="Erstellen"/>
                <!--TODO: Muss ich hier die insert methode aufrufen?-->
                <!--oder muss ich irgendwo if(isset()) aufrufen?-->
			</div>

			<div class="signup-footer">
				<a href="index.php?c=pages&a=login">« zurück zum Login</a>
			</div>
		</form>
	</div>
</div>