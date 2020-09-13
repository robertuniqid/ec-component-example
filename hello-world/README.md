# eLearnCommerce Hello World Component Example

This is a simple WordPress plugin that registers an eLearnCommerce Hello World component, and creates a shortcode for it.
It shows the simplicity in connecting the WordPress editor for shortcodes into creating components, these same components can be easily registered to work with the Gutenberg builder, and be a block.

# Important 

This example is for version 2.0 of eLearnCommerce.

Video : https://www.youtube.com/watch?v=L10jHZ-4IJY 

Copy elearncommerce-playground folder into your wp-content/plugins directory, make sure wpep ( elearncommerce ) is in wp-content/plugins too, if not, you'll have to adjust the mixin import from the SCSS.

# Content for WordPress Page or Post : 

[ecp_hello_world][/ecp_hello_world]

[ecp_hello_world template="secondary"]Secondary - This is a custom message for the component.[/ecp_hello_world]

[ecp_hello_world template="tertiary" message="Tertiary - This is a custom message for the component."]
