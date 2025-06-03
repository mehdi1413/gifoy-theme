<?php
/**
 * The pagination template file
 * @package gifoy
 */
defined('ABSPATH') || exit; ?>

<div class="pagination-area mt-60">
    <div aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true"><i class="far fa-arrow-left"></i></span>
                </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><span class="page-link">...</span></li>
            <li class="page-item"><a class="page-link" href="#">10</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true"><i class="far fa-arrow-right"></i></span>
                </a>
            </li>
        </ul>
    </div>
</div>