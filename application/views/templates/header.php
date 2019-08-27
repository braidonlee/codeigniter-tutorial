<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ciBlog</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/journal/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">ciBlog</a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>">Home</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>posts">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>categories">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>about">About</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <?php if (!$this->session->userdata('logged_in')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>users/register">REGISTER</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>users/login">LOGIN</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>posts/create">POST</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>categories/create">CATEGORY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>users/logout">LOGOUT</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-3">
        <?php if($this->session->flashdata('user_registered')): ?>
            <div class="alert alert-success" role="alert">
                <?= $this->session->flashdata('user_registered'); ?>
            </div>
        <?php endif; ?>

        <?php if($this->session->flashdata('post_created')): ?>
            <div class="alert alert-success" role="alert">
                <?= $this->session->flashdata('post_created'); ?>
            </div>
        <?php endif; ?>

        <?php if($this->session->flashdata('post_updated')): ?>
            <div class="alert alert-success" role="alert">
                <?= $this->session->flashdata('post_updated'); ?>
            </div>
        <?php endif; ?>

        <?php if($this->session->flashdata('post_deleted')): ?>
            <div class="alert alert-success" role="alert">
                <?= $this->session->flashdata('post_deleted'); ?>
            </div>
        <?php endif; ?>

        <?php if($this->session->flashdata('category_created')): ?>
            <div class="alert alert-success" role="alert">
                <?= $this->session->flashdata('category_created'); ?>
            </div>
        <?php endif; ?>

        <?php if($this->session->flashdata('login_failed')): ?>
            <div class="alert alert-danger" role="alert">
                <?= $this->session->flashdata('login_failed'); ?>
            </div>
        <?php endif; ?>

        <?php if($this->session->flashdata('user_loggedin')): ?>
            <div class="alert alert-success" role="alert">
                <?= $this->session->flashdata('user_loggedin'); ?>
            </div>
        <?php endif; ?>

        <?php if($this->session->flashdata('user_loggedout')): ?>
            <div class="alert alert-success" role="alert">
                <?= $this->session->flashdata('user_loggedout'); ?>
            </div>
        <?php endif; ?>