<?= $this->extend('templates/main') ?>

<?= $this->section('content') ?>
<section class="hero shell">
    <div class="hero-copy">
        <p class="eyebrow">Store operations, simplified</p>
        <h1>A clear starting point for everyday sales.</h1>
        <p class="lede">Northstar brings customer and staff records into one focused workspace built on CodeIgniter's MVC structure.</p>
        <div class="hero-actions">
            <a class="button button-primary" href="<?= site_url('customers') ?>">Browse customers</a>
            <a class="button button-secondary" href="<?= site_url('users') ?>">View user accounts</a>
        </div>
    </div>
    <div class="hero-panel" aria-label="System overview">
        <div class="panel-heading"><span>Today at a glance</span><span class="status"><i></i> System ready</span></div>
        <div class="metric-grid">
            <article><span class="metric-icon">01</span><strong>6</strong><small>Customer accounts</small></article>
            <article><span class="metric-icon">02</span><strong>6</strong><small>Staff users</small></article>
            <article><span class="metric-icon">03</span><strong>4</strong><small>Working pages</small></article>
            <article><span class="metric-icon">04</span><strong>100%</strong><small>Database backed</small></article>
        </div>
    </div>
</section>
<section class="section shell">
    <div class="section-heading">
        <div><p class="eyebrow">Persistent workspace</p><h2>Real records for the second release</h2></div>
        <p>This version keeps the original interface while retrieving customer and user records from MySQL through CodeIgniter Models.</p>
    </div>
    <div class="feature-grid">
        <a class="feature-card" href="<?= site_url('customers') ?>"><span>Customers</span><h3>Keep contacts organized</h3><p>Review names, email addresses, and phone numbers in a clean account directory.</p><b>Open directory &rarr;</b></a>
        <a class="feature-card dark" href="<?= site_url('users') ?>"><span>Staff access</span><h3>Know who runs the store</h3><p>See usernames, full names, and assigned roles for every member of the team.</p><b>Open user accounts &rarr;</b></a>
        <a class="feature-card" href="<?= site_url('about') ?>"><span>Architecture</span><h3>Built with MVC</h3><p>Learn how routes, controllers, and views work together in this CodeIgniter application.</p><b>Read about the app &rarr;</b></a>
    </div>
</section>
<?= $this->endSection() ?>
