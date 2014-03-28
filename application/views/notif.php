<div class="notif">
  <?php if ($this->session->flashdata('alert')) : ?>
    <div class="alert"><?= $this->session->flashdata('alert') ?></div>
  <?php elseif ($this->session->flashdata('notice')) : ?>
    <div class="notice"><?= $this->session->flashdata('notice') ?></div>
  <?php endif; ?>
</div>
<script type="text/javascript" src="<?= base_url() . 'assets/scripts/notif.js' ?>"></script>