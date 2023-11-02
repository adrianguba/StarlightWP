# StarlightWP - Simple WordPress starter theme

Welcome to the StarlightWP, a lightweight and flexible foundation for building custom WordPress themes. This starter theme is designed to help you kickstart your theme development process and provides a solid starting point for creating beautiful and functional WordPress themes.

## Features

- **Clean and Minimalistic**: The theme follows a clean and minimal design approach to ensure flexibility and ease of customization.

- **Optimized for Performance**: This theme is built with performance in mind, with optimized code and minimal dependencies.

- **ACF PRO Ready**: This theme utilizes usage of Advanced Custom Fields PRO to register and extend blocks.

- **Docker Ready**: This Starter theme uses Docker for local development, so you can start coding right away!

- **Tailwind Support**: This theme uses TailwindCSS, great library that simplifies and minifies usage of plain CSS.

## Getting Started

To get started with the StarlightWP, follow these steps:

1. Clone, fork or download this repository.

2. Use `docker-compose up` command to start and run local environment.

3. Go to localhost:8080 and complete WordPress installation.

4. Activate the theme in WordPress Appearance admin page.

5. Use `npm run dev` command to start watching and compiling your CSS & JS.

6. You are ready to create your next great project.

## Project Structure

### Template parts
Create all your template parts at content/themes/starter-theme/template-parts directory. Template parts should be smallest and reusable elements eg. Card, Heading etc.

### Blocks
Create your blocks at content/mu-plugins/acf-custom-blocks/blocks directory. Here's how:

1. Create a new directory, call it with your desired block name e.g. `hero-section`
2. Create a new file inside this directory with name responding to your desired block name e.g. `hero-section.php`. Inside this file you can put all your HTML and include template parts using `get_extended_template_part`. Which is provided by https://github.com/johnbillion/extended-template-parts
3. Create a new file inside this directory called `block.json`. Register your block information in this file, refer to WP Codex or/and ACF Docs what can be done there.
4. Add call to to your file at acf-custom-blocks.php file in `SST\Blocks\register_all_blocks` function like this: 
`register_block_type( dirname( __FILE__ ) . '/blocks/sample-block' );`
5. That's it!

## Contributing

If you want to contribute to the development of this starter theme or have any suggestions, please feel free to [open an issue](https://github.com/StarlightWP/issues) or [submit a pull request](https://github.com/StarlightWP/pulls).

## License

The WordPress Starter Theme is released under the [MIT License](LICENSE.md), so you are free to use, modify, and distribute it.