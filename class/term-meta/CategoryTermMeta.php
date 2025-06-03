<?php
defined('ABSPATH') || exit;

class CategoryMetaBox
{

    public function __construct()
    {
        add_action('category_edit_form_fields', [$this, 'category_meta_box_display_handler']);
        add_action('edited_category', [$this, 'save_custom_category_meta_boxes']);
    }

    public function category_meta_box_display_handler($tag): void
    {
        $category_style = get_term_meta($tag->term_id, '_category_style', true); ?>
        <tr class="form-field form-required term-name-wrap">
            <th scope="row"><label for="category-style">تمپلیت دسته بندی</label></th>
            <td>
                <select name="category-style" id="category-style">
                    <option value="grid" <?php echo selected($category_style, 'grid'); ?>>گرید</option>
                    <option value="sidebar-grid" <?php echo selected($category_style, 'sidebar-grid'); ?>>گرید با سایدبار
                    </option>
                </select>
            </td>
        </tr>
        <?php
    }

    public function save_custom_category_meta_boxes($term_id): void
    {
        $allowed_options = ['grid', 'sidebar-grid'];

        if (isset($_POST['category-style']) && in_array($_POST['category-style'], $allowed_options)) {
            $category_style = sanitize_text_field($_POST['category-style']);
            update_term_meta($term_id, '_category_style', $category_style);
        }
    }
}

new CategoryMetaBox();