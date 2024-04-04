<div class="page-section page-section-content">
    <div class="container">
        <div class="content-main" role="main">

            <h1>PageTitle</h1>
            <p>Lorem Ipsum is slechts <a href="#">een proeftekst</a> uit het drukkerij- en zetterijwezen. Lorem Ipsum is
                de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak
                met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf
                eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. </p>
            <p>Lorem Ipsum is slechts <a href="#">een proeftekst</a> uit het drukkerij- en zetterijwezen. Lorem Ipsum is
                de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak
                met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf
                eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. </p>

            <hr>

            <h2>Form - inline layout</h2>
            <form class="form-layout-inline" id="form-login" method="post" action="#">
                <label for="login-user-name2">User name</label>
                <input type="text" name="login-user-name" id="login-user-name2" autocomplete="username" invalid
                       required>
                <label for="login-password2">Your password</label>
                <input type="text" name="login-password" id="login-password2" autocomplete="current-password" required>
                <input type="submit" value="Send">
            </form>

            <hr>

            <h2>Form - stacked layout</h2>
            <form class="form-layout-stacked" id="form-login2" method="post" action="#">
                <div class="form-group">
                    <label for="login-user-name">User name</label>
                    <input type="text" name="login-user-name" id="login-user-name" autocomplete="username" invalid
                           required>
                </div>
                <div class="form-group">
                    <label for="login-password">Your password</label>
                    <input type="text" name="login-password" id="login-password" autocomplete="current-password"
                           required>
                </div>
                <div class="form-group">
                    <input type="submit" value="Send">
                </div>
            </form>

            <hr>

            <h2>Form - grid / horizontal layout</h2>
            <form class="form-layout-grid" id="form-contact" method="post" action="#">
                <div class="form-group">
                    <div class="form-group-label">
                        <label for="first-name">First name</label>
                    </div>
                    <div class="form-group-input">
                        <input type="text" name="first-name" id="first-name" placeholder="first name"
                               autocomplete="given-name" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group-label">
                        <label for="last-name">Last name (disabled)</label>
                    </div>
                    <div class="form-group-input">
                        <input type="text" name="last-name" id="last-name" placeholder="last name"
                               autocomplete="family-name" disabled required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group-label">
                        <label for="contact-search">Search</label>
                    </div>
                    <div class="form-group-input">
                        <input type="search" name="contact-search" id="contact-search">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group-label">
                        <label for="contact-email">E-mail</label>
                    </div>
                    <div class="form-group-input">
                        <input class="is-error" type="email" name="contact-email" id="contact-email"
                               autocomplete="email" required>
                        <div class="form-error">An error message</div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group-label">
                        <label for="login-pwd">Create a password</label>
                    </div>
                    <div class="form-group-input">
                        <input type="password" name="login-pwd" id="login-pwd" class="size-small">
                        <label class="label-checkbox form-description"><input type="checkbox" name="rememberme"
                                                                              value="rememberme" id="rememberme">Remember
                            me</label>
                        <p class="recover-password form-description"><a href="#">Forgot password?</a></p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group-label">
                        <div class="label">Animal</div>
                    </div>
                    <div class="form-group-input">
                        <div class="form-wrap-inputs" role="radiogroup">
                            <label class="label-radio"><input type="radio" name="animal" value="cat"
                                                              id="cat">Cat</label>
                            <label class="label-radio"><input type="radio" name="animal" value="dog"
                                                              id="dog">Dog</label>
                            <label class="label-radio"><input type="radio" name="animal" value="mouse" id="mouse"
                                                              disabled>Mouse (disabled)</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group-label">
                        <div class="label">Fruit (inline)</div>
                    </div>
                    <div class="form-group-input">
                        <div class="form-wrap-inputs inline" role="radiogroup">
                            <label class="label-radio"><input type="radio" name="fruit" value="apple"
                                                              id="apple">Apple</label>
                            <label class="label-radio"><input type="radio" name="fruit" value="pear"
                                                              id="pear">Pear</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group-label">
                        <div class="label">Your choice among these three beautiful options</div>
                    </div>
                    <div class="form-group-input">
                        <div class="form-wrap-inputs">
                            <label class="label-checkbox"><input type="checkbox" name="checkies" value="one" id="one">One</label>
                            <label class="label-checkbox"><input type="checkbox" name="checkies" value="two" id="two">Two</label>
                            <label class="label-checkbox"><input type="checkbox" name="checkies" value="three"
                                                                 id="three" disabled>Three (disabled)</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group-label">
                        <label for="myselect">Choose</label>
                    </div>
                    <div class="form-group-input">
                        <select class="myselect" name="myselect" id="myselect">
                            <option value="" selected disabled>-- Please select an option --</option>
                            <option value="a">Number one</option>
                            <option value="a">Number two</option>
                            <option value="b">Number three</option>
                            <option value="c">Number four</option>
                            <optgroup label="A group">
                                <option value="d">Number five</option>
                                <option value="e">Number six</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group-input">
                        <label for="contact-msg">Your message</label>
                        <textarea name="contact-msg" id="contact-msg" cols="30" rows="10" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group-input">
                        <label class="label-checkbox form-position-right" for="acceptterms">
                            <input type="checkbox" name="acceptterms" value="acceptterms" id="acceptterms">
                            Yes, I agree with the <a href="#">document</a>.
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group-input">
                        <div class="form-buttons">
                            <input type="submit" value="Send">
                            <input type="submit" value="Disabled" disabled>
                            <input class="outlined" type="submit" value="Outlined">
                        </div>
                    </div>
                </div>
            </form>
            <hr>
            <p>Simple grid, no defined number of rows, single row (on desktop)</p>
            <div class="row">
                <div class="column span-2">Span 2</div>
                <div class="column">Span 1</div>
                <div class="column">Span 1</div>
                <div class="column">Span 1</div>
                <div class="column">Span 1</div>
            </div>
            <p>grid with three columns (on desktop)</p>
            <div class="row-3-colums">
                <div class="column span-2">Span 2</div>
                <div class="column">Span 1</div>
                <div class="column start-at-2">Span 1, start at 2</div>
                <div class="column">Span 1</div>
                <div class="column">Span 1</div>
            </div>
        </div>
        <div class="content-sub">
            <aside class="widget">
                <p>A widget or sidebar component (aside)</p>
            </aside>
        </div>
    </div>
</div>