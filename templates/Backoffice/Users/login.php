<?php $this->start('login'); ?>
<div class="form-login-BO">                        

<div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
    <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
        <h2 class="card-title fw-bold mb-1">Bienvenue sur votre Backoffice! 👋</h2>
        <p class="card-text mb-2">Connectez-vous à votre espace pour administrer vos contenus</p>
        <?= $this->Form->create(null, ['class' => 'auth-login-form mt-2']) ?>
            <div class="mb-1">
                <label class="form-label" for="login-email">E-mail</label>
                <?= $this->Form->control('username', ['label' => false, 'class' => 'form-control', 'placeholder' => 'john@example.com', 'required' => true]) ?>
            </div>
            <div class="mb-1">
                <div class="d-flex justify-content-between">
                    <label class="form-label" for="login-password">Mot de passe</label>
                </div>
                <div class="input-group input-group-merge form-password-toggle">
                    <?= $this->Form->control('password', ['templates' => 'app_form', 'label' => false, 'class' => 'form-control form-control-merge', 'placeholder' => '....................', 'required' => true]) ?> 
                    
                    <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
            
                </div>
            </div>
            <div class="mb-1">
            <a href="<?= $this->Url->build('/backoffice/mot-de-passe-oublie'); ?>"><small>Mot de passe oublié?</small></a>
                <div class="form-check">
                    <input class="form-check-input" id="remember-me" type="checkbox" tabindex="3" />
                    <label class="form-check-label" for="remember-me"> Se souvenir de moi</label>
                </div>
            </div>
            <button class="btn btn-primary w-100" tabindex="4">Connexion</button>
            <?= $this->Form->end() ?>
        </form>
        <p class="text-center mt-2"><span>Un problème technique ?</span><br><a href="<?= $this->Url->build('/backoffice/report'); ?>"><span>&nbsp;Contactez notre support.</span></a></p> </div>
</div>
<?php $this->end()?>