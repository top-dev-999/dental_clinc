<div class="row">
    <div class="col-sm-3">
        <a href="<?php echo site_url('admin/doctor'); ?>">
            <div class="tile-stats tile-white tile-white-primary">
                <div class="icon"><i class="fa fa-user-md"></i></div>
                <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('doctor'); ?>"
                     data-duration="1500" data-delay="0"><?php echo $this->db->count_all('doctor'); ?></div>
                <h3><?php echo get_phrase('doctor') ?></h3>
            </div>
        </a>
    </div>

    <div class="col-sm-3">
        <a href="<?php echo site_url('admin/patient'); ?>">
            <div class="tile-stats tile-white-red">
                <div class="icon"><i class="fa fa-user"></i></div>
                <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('patient'); ?>" 
                     data-duration="1500" data-delay="0"><?php echo $this->db->count_all('patient'); ?></div>
                <h3><?php echo get_phrase('patient') ?></h3>
            </div>
        </a>
    </div>

    <div class="col-sm-3">
        <a href="<?php echo site_url('admin/nurse'); ?>">
            <div class="tile-stats tile-white-aqua">
                <div class="icon"><i class="fa fa-plus-square"></i></div>
                <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('nurse'); ?>" 
                     data-duration="1500" data-delay="0"><?php echo $this->db->count_all('nurse'); ?></div>
                <h3><?php echo get_phrase('nurse') ?></h3>
            </div>
        </a>
    </div>

    <div class="col-sm-3">
        <a href="<?php echo site_url('admin/pharmacist'); ?>">
            <div class="tile-stats tile-white-blue">
                <div class="icon"><i class="fa fa-medkit"></i></div>
                <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('pharmacist'); ?>" 
                     data-duration="1500" data-delay="0"><?php echo $this->db->count_all('pharmacist'); ?></div>
                <h3><?php echo get_phrase('pharmacist') ?></h3>
            </div>
        </a>
    </div>
</div>

<br />

<div class="row">
    <div class="col-sm-3">
        <a href="<?php echo site_url('admin/laboratorist'); ?>">
            <div class="tile-stats tile-white-cyan">
                <div class="icon"><i class="fa fa-user"></i></div>
                <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('laboratorist'); ?>" 
                     data-duration="1500" data-delay="0"><?php echo $this->db->count_all('laboratorist'); ?></div>
                <h3><?php echo get_phrase('laboratorist') ?></h3>
            </div>
        </a>
    </div>

    <div class="col-sm-3">
        <a href="<?php echo site_url('admin/accountant'); ?>">
            <div class="tile-stats tile-white-purple">
                <div class="icon"><i class="fa fa-money"></i></div>
                <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('accountant'); ?>" 
                     data-duration="1500" data-delay="0"><?php echo $this->db->count_all('accountant'); ?></div>
                <h3><?php echo get_phrase('accountant') ?></h3>
            </div>
        </a>
    </div>

    <div class="col-sm-3">
        <a href="<?php echo site_url('admin/payment_history'); ?>">
            <div class="tile-stats tile-white-pink">
                <div class="icon"><i class="fa fa-list-alt"></i></div>
                <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('invoice'); ?>" 
                     data-duration="1500" data-delay="0"><?php echo $this->db->count_all('invoice'); ?></div>
                <h3><?php echo get_phrase('payment') ?></h3>
            </div>
        </a>
    </div>

    <div class="col-sm-3">
        <a href="<?php echo site_url('admin/medicine'); ?>">
            <div class="tile-stats tile-white-orange">
                <div class="icon"><i class="fa fa-medkit"></i></div>
                <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('medicine'); ?>" 
                     data-duration="1500" data-delay="0"><?php echo $this->db->count_all('medicine'); ?></div>
                <h3><?php echo get_phrase('medicine') ?></h3>
            </div>
        </a>
    </div>
</div>
