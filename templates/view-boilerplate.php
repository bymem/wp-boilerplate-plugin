<?php
/**
 * The template for displaying the test page
 *
 * @package boilerplate
 * @subpackage Boilerplate/templates
 * 
 * https://www.jqueryscript.net/animation/Confetti-Animation-jQuery-Canvas-Confetti-js.html
 */

defined('WPINC') or die("No direct access"); // Exit if accessed directly

get_header(); ?>

<?php _e('something really interresting', 'nova'); ?>

<div class="sidebar">
    <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
        <li class="nav-item active" role="presentation">
            <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button"
                role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
                type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
        </li>
    </ul>
    <div class="tab-content mb-5" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
            tabindex="0">
            <h4 class="mb-4">
                Ins Dunleavy
                <span>From current location</span>
            </h4>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Total dist.
                    <span>6.548.120.015 km</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    E.T.A.
                    <span>8 minutes</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Waypoints
                    <span>3 QTM</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Total fuel REQ.
                    <span>4.520 l</span>
                </li>
            </ul>
        </div>
        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <p>Donec accumsan neque sed ligula sollicitudin molestie. Maecenas ultricies sem ut diam finibus, et
                fringilla tellus dictum. Aliquam blandit egestas nunc. Cras venenatis scelerisque justo, nec pulvinar
                augue congue eu. Etiam ullamcorper dignissim elit in sodales. Aenean sapien justo, elementum a lectus
                ac, consequat vestibulum eros. Donec dignissim mi eget semper sagittis. Nulla ullamcorper a risus
                eleifend commodo. Duis vitae massa vitae turpis auctor lobortis at eu dui. In porttitor risus sit amet
                est pulvinar, ac fringilla lacus viverra. Donec vulputate odio lacus, quis imperdiet libero tristique
                eu. Curabitur est leo, imperdiet sit amet dictum sit amet, tincidunt id dolor. Curabitur tempor dapibus
                nibh, nec congue est facilisis id. Morbi imperdiet eget orci vel faucibus. Vestibulum blandit massa
                auctor, dignissim ipsum quis, aliquam urna.</p>
        </div>
        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
            <p>Donec accumsan neque sed ligula sollicitudin molestie. Maecenas ultricies sem ut diam finibus, et
                fringilla tellus dictum. Aliquam blandit egestas nunc. Cras venenatis scelerisque justo, nec pulvinar
                augue congue eu. Etiam ullamcorper dignissim elit in sodales. Aenean sapien justo, elementum a lectus
                ac, consequat vestibulum eros. Donec dignissim mi eget semper sagittis. Nulla ullamcorper a risus
                eleifend commodo. Duis vitae massa vitae turpis auctor lobortis at eu dui. In porttitor risus sit amet
                est pulvinar, ac fringilla lacus viverra. Donec vulputate odio lacus, quis imperdiet libero tristique
                eu. Curabitur est leo, imperdiet sit amet dictum sit amet, tincidunt id dolor. Curabitur tempor dapibus
                nibh, nec congue est facilisis id. Morbi imperdiet eget orci vel faucibus. Vestibulum blandit massa
                auctor, dignissim ipsum quis, aliquam urna.</p>
        </div>
        <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
            <p>Donec accumsan neque sed ligula sollicitudin molestie. Maecenas ultricies sem ut diam finibus, et
                fringilla tellus dictum. Aliquam blandit egestas nunc. Cras venenatis scelerisque justo, nec pulvinar
                augue congue eu. Etiam ullamcorper dignissim elit in sodales. Aenean sapien justo, elementum a lectus
                ac, consequat vestibulum eros. Donec dignissim mi eget semper sagittis. Nulla ullamcorper a risus
                eleifend commodo. Duis vitae massa vitae turpis auctor lobortis at eu dui. In porttitor risus sit amet
                est pulvinar, ac fringilla lacus viverra. Donec vulputate odio lacus, quis imperdiet libero tristique
                eu. Curabitur est leo, imperdiet sit amet dictum sit amet, tincidunt id dolor. Curabitur tempor dapibus
                nibh, nec congue est facilisis id. Morbi imperdiet eget orci vel faucibus. Vestibulum blandit massa
                auctor, dignissim ipsum quis, aliquam urna.</p>
        </div>
    </div>

    <?php _b('Commit to helm', '#', 'btn-primary mb-4'); ?>
    <?php _b('Send', '#', 'btn-primary'); ?>
    <?php _b('Cancel', '#', 'btn-primary'); ?>
    <?php _b('Center in view', '#', 'btn-primary mt-4'); ?>

    <h6 class="mt-5">General</h6>
    <?php _b('2D', '#', 'btn-primary btn-small'); ?>

    <?php _b('3D', '#', 'btn-primary btn-small'); ?>
</div>

<div id="primary" <?php post_class('site-content page'); ?>>
    <h1>This is the H1 element</h1>
    <h2>This is the H2 element</h2>
    <h3>This is the H3 element</h3>
    <h4>This is the H4 element</h4>
    <h5>This is the H5 element</h5>
    <h6>This is the H6 element</h6>
    <p>Lorem ipsum dolor sit amet, <a href="">consectetur adipiscing</a> elit. Proin lorem lorem, dictum et tortor
        consequat, ornare ornare eros. Cras sit amet mollis risus. In nunc quam, cursus ut lacinia tristique, accumsan
        ut elit. Aenean non eros eget arcu hendrerit porta. Pellentesque ut accumsan lacus. Etiam sagittis massa egestas
        pretium finibus. Donec non metus libero. Integer mauris justo, fermentum id dapibus id, vulputate sed risus.
        Duis vel dignissim sem.</p>

    <p>Morbi quis nibh ac augue porttitor scelerisque. <a href="">Nulla vehicula</a> id arcu at fringilla. In eget lorem
        at massa tincidunt mollis. Suspendisse id leo in purus scelerisque tempus. Aliquam interdum sit amet mi a
        vehicula. Nam at mi in leo eleifend accumsan. Donec nec pharetra risus, at laoreet quam. Aliquam eu felis urna.
        Maecenas accumsan odio eu tincidunt facilisis. Duis tempus ornare arcu eget iaculis. Suspendisse turpis dolor,
        condimentum vel mollis vitae, convallis at eros. Etiam ac nunc ut mauris vestibulum porta eget non tellus. Sed
        vitae pharetra sem, quis interdum metus. Nunc sit amet magna aliquam, volutpat eros vitae, maximus erat.</p>

    <p>Donec accumsan neque sed ligula sollicitudin molestie. Maecenas ultricies sem ut diam finibus, et fringilla
        tellus dictum. Aliquam blandit egestas nunc. Cras venenatis scelerisque justo, nec pulvinar augue congue eu.
        Etiam ullamcorper dignissim elit in sodales. Aenean sapien justo, elementum a lectus ac, consequat vestibulum
        eros. Donec dignissim mi eget semper sagittis. Nulla ullamcorper a risus eleifend commodo. Duis vitae massa
        vitae turpis auctor lobortis at eu dui. In porttitor risus sit amet est pulvinar, ac fringilla lacus viverra.
        Donec vulputate odio lacus, quis imperdiet libero tristique eu. Curabitur est leo, imperdiet sit amet dictum sit
        amet, tincidunt id dolor. Curabitur tempor dapibus nibh, nec congue est facilisis id. Morbi imperdiet eget orci
        vel faucibus. Vestibulum blandit massa auctor, dignissim ipsum quis, aliquam urna.</p>
    <?php

    $form_args = get_boilerplate_meta_fields();



    get_form($form_args);

    ?>
</div>

<div class="sidebar">
    <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">1</button>
        </li>
        <li class="nav-item active" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">2</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
                type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">2</button>
        </li>
    </ul>
    <div class="tab-content mb-5" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
            tabindex="0">
            <h4 class="mb-3">
                Waypoint
            </h4>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Location
                    <span>URANUS</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Type
                    <span>Planet</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    TRavel medium
                    <span>Q-DRIVE</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Distance
                    <span>6.530.689 km</span>
                </li>
            </ul>
        </div>
        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <p>Donec accumsan neque sed ligula sollicitudin molestie. Maecenas ultricies sem ut diam finibus, et
                fringilla tellus dictum. Aliquam blandit egestas nunc. Cras venenatis scelerisque justo, nec pulvinar
                augue congue eu. Etiam ullamcorper dignissim elit in sodales. Aenean sapien justo, elementum a lectus
                ac, consequat vestibulum eros. Donec dignissim mi eget semper sagittis. Nulla ullamcorper a risus
                eleifend commodo. Duis vitae massa vitae turpis auctor lobortis at eu dui. In porttitor risus sit amet
                est pulvinar, ac fringilla lacus viverra. Donec vulputate odio lacus, quis imperdiet libero tristique
                eu. Curabitur est leo, imperdiet sit amet dictum sit amet, tincidunt id dolor. Curabitur tempor dapibus
                nibh, nec congue est facilisis id. Morbi imperdiet eget orci vel faucibus. Vestibulum blandit massa
                auctor, dignissim ipsum quis, aliquam urna.</p>
        </div>
        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
            <p>Donec accumsan neque sed ligula sollicitudin molestie. Maecenas ultricies sem ut diam finibus, et
                fringilla tellus dictum. Aliquam blandit egestas nunc. Cras venenatis scelerisque justo, nec pulvinar
                augue congue eu. Etiam ullamcorper dignissim elit in sodales. Aenean sapien justo, elementum a lectus
                ac, consequat vestibulum eros. Donec dignissim mi eget semper sagittis. Nulla ullamcorper a risus
                eleifend commodo. Duis vitae massa vitae turpis auctor lobortis at eu dui. In porttitor risus sit amet
                est pulvinar, ac fringilla lacus viverra. Donec vulputate odio lacus, quis imperdiet libero tristique
                eu. Curabitur est leo, imperdiet sit amet dictum sit amet, tincidunt id dolor. Curabitur tempor dapibus
                nibh, nec congue est facilisis id. Morbi imperdiet eget orci vel faucibus. Vestibulum blandit massa
                auctor, dignissim ipsum quis, aliquam urna.</p>
        </div>
        <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
            <p>Donec accumsan neque sed ligula sollicitudin molestie. Maecenas ultricies sem ut diam finibus, et
                fringilla tellus dictum. Aliquam blandit egestas nunc. Cras venenatis scelerisque justo, nec pulvinar
                augue congue eu. Etiam ullamcorper dignissim elit in sodales. Aenean sapien justo, elementum a lectus
                ac, consequat vestibulum eros. Donec dignissim mi eget semper sagittis. Nulla ullamcorper a risus
                eleifend commodo. Duis vitae massa vitae turpis auctor lobortis at eu dui. In porttitor risus sit amet
                est pulvinar, ac fringilla lacus viverra. Donec vulputate odio lacus, quis imperdiet libero tristique
                eu. Curabitur est leo, imperdiet sit amet dictum sit amet, tincidunt id dolor. Curabitur tempor dapibus
                nibh, nec congue est facilisis id. Morbi imperdiet eget orci vel faucibus. Vestibulum blandit massa
                auctor, dignissim ipsum quis, aliquam urna.</p>
        </div>
    </div>
    <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Economy</button>
        </li>
        <li class="nav-item active" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">History</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
                type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Overview</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
            tabindex="0">
            <hr />
            <p>Donec accumsan neque sed ligula sollicitudin molestie. Maecenas ultricies sem ut diam finibus, et
                fringilla tellus dictum. Aliquam blandit egestas nunc. Cras venenatis scelerisque justo, nec pulvinar
                augue congue eu. Etiam ullamcorper dignissim elit in sodales. Aenean sapien justo, elementum a lectus
                ac, consequat vestibulum eros. Donec dignissim mi eget semper sagittis.</p>
            <p>Nulla ullamcorper a risus eleifend commodo. Duis vitae massa vitae turpis auctor lobortis at eu dui. In
                porttitor risus sit amet est pulvinar, ac fringilla lacus viverra. Donec vulputate odio lacus, quis
                imperdiet libero tristique eu. Curabitur est leo, imperdiet sit amet dictum sit amet, tincidunt id
                dolor. Curabitur tempor dapibus nibh, nec congue est facilisis id. Morbi imperdiet eget orci vel
                faucibus. Vestibulum blandit massa auctor, dignissim ipsum quis, aliquam urna.</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Popilation
                    <span>24.192.201.258</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    GWP
                    <span>388.7 Trillion</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Threat level
                    <span>Minimal</span>
                </li>
            </ul>
        </div>
        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <p>Donec accumsan neque sed ligula sollicitudin molestie. Maecenas ultricies sem ut diam finibus, et
                fringilla tellus dictum. Aliquam blandit egestas nunc. Cras venenatis scelerisque justo, nec pulvinar
                augue congue eu. Etiam ullamcorper dignissim elit in sodales. Aenean sapien justo, elementum a lectus
                ac, consequat vestibulum eros. Donec dignissim mi eget semper sagittis. Nulla ullamcorper a risus
                eleifend commodo. Duis vitae massa vitae turpis auctor lobortis at eu dui. In porttitor risus sit amet
                est pulvinar, ac fringilla lacus viverra. Donec vulputate odio lacus, quis imperdiet libero tristique
                eu. Curabitur est leo, imperdiet sit amet dictum sit amet, tincidunt id dolor. Curabitur tempor dapibus
                nibh, nec congue est facilisis id. Morbi imperdiet eget orci vel faucibus. Vestibulum blandit massa
                auctor, dignissim ipsum quis, aliquam urna.</p>
        </div>
        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
            <p>Donec accumsan neque sed ligula sollicitudin molestie. Maecenas ultricies sem ut diam finibus, et
                fringilla tellus dictum. Aliquam blandit egestas nunc. Cras venenatis scelerisque justo, nec pulvinar
                augue congue eu. Etiam ullamcorper dignissim elit in sodales. Aenean sapien justo, elementum a lectus
                ac, consequat vestibulum eros. Donec dignissim mi eget semper sagittis. Nulla ullamcorper a risus
                eleifend commodo. Duis vitae massa vitae turpis auctor lobortis at eu dui. In porttitor risus sit amet
                est pulvinar, ac fringilla lacus viverra. Donec vulputate odio lacus, quis imperdiet libero tristique
                eu. Curabitur est leo, imperdiet sit amet dictum sit amet, tincidunt id dolor. Curabitur tempor dapibus
                nibh, nec congue est facilisis id. Morbi imperdiet eget orci vel faucibus. Vestibulum blandit massa
                auctor, dignissim ipsum quis, aliquam urna.</p>
        </div>
        <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
            <p>Donec accumsan neque sed ligula sollicitudin molestie. Maecenas ultricies sem ut diam finibus, et
                fringilla tellus dictum. Aliquam blandit egestas nunc. Cras venenatis scelerisque justo, nec pulvinar
                augue congue eu. Etiam ullamcorper dignissim elit in sodales. Aenean sapien justo, elementum a lectus
                ac, consequat vestibulum eros. Donec dignissim mi eget semper sagittis. Nulla ullamcorper a risus
                eleifend commodo. Duis vitae massa vitae turpis auctor lobortis at eu dui. In porttitor risus sit amet
                est pulvinar, ac fringilla lacus viverra. Donec vulputate odio lacus, quis imperdiet libero tristique
                eu. Curabitur est leo, imperdiet sit amet dictum sit amet, tincidunt id dolor. Curabitur tempor dapibus
                nibh, nec congue est facilisis id. Morbi imperdiet eget orci vel faucibus. Vestibulum blandit massa
                auctor, dignissim ipsum quis, aliquam urna.</p>
        </div>
    </div>
    <?php _b('Bookmark', '#', 'btn-primary mt-5'); ?>
</div>

<?php get_footer();