<?= $this->extend('templates/main') ?>
<?= $this->section('content') ?>
<?php $formInput = session('formInput') ?? []; ?>
<section class="page-hero compact shell"><p class="eyebrow">User form</p><h1><?= $user ? 'Edit user' : 'New user' ?></h1><p>Usernames must be unique. Profile pictures accept JPG or PNG files up to 2MB.</p></section>
<section class="form-section shell"><div class="form-card">
<?php if ($errors): ?><div class="notice error"><ul><?php foreach ($errors as $error): ?><li><?= esc($error) ?></li><?php endforeach; ?></ul></div><?php endif; ?>
<form method="post" enctype="multipart/form-data" action="<?= $user ? site_url('users/' . $user['id']) : site_url('users') ?>">
<?= csrf_field() ?>
<div class="field"><label for="username">Username</label><input id="username" name="username" required maxlength="50" value="<?= esc(($formInput['username'] ?? '') ?: ($user['username'] ?? ''), 'attr') ?>"></div>
<div class="field"><label for="full_name">Full name</label><input id="full_name" name="full_name" required maxlength="100" value="<?= esc($formInput['full_name'] ?? ($user['full_name'] ?? ''), 'attr') ?>"></div>
<?php if ($user): ?><div class="field"><label for="avatar">Profile picture</label><input id="avatar" name="avatar" type="file" accept="image/jpeg,image/png"><small>Optional. A square 160 × 160 display copy will be prepared.</small></div><?php endif; ?>
<div class="form-actions"><button class="button button-primary" type="submit"><?= $user ? 'Save changes' : 'Create user' ?></button><a class="button button-secondary" href="<?= site_url('users') ?>">Cancel</a></div>
</form></div></section>
<?= $this->endSection() ?>
