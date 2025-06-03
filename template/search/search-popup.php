<?php
/**
 * The search popup template file
 * @package gifoy
 */
defined('ABSPATH') || exit; ?>
<div class="search-popup">
    <button class="close-search"><span class="far fa-times"></span></button>
    <form action="#">
        <div class="form-group">
            <input type="search" name="search-field" class="form-control" placeholder="جستجو..." required>
            <button type="submit"><i class="far fa-search"></i></button>
        </div>
    </form>
</div>