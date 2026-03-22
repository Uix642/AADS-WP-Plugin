# AADS WordPress Plugin

WordPress plugin for embedding [AADS](https://aads.com) ad units using both:

- A classic WordPress widget
- A Gutenberg block (`aadsplugin/aads-block`)

This repository follows the WordPress.org plugin SVN-style layout with versioned `tags/` and active development in `trunk/`.

## Current Version

- Stable: `2.1`
- Main plugin file: `trunk/AADS.php`

## Features

- Add AADS ads from the WordPress Widgets screen.
- Insert AADS ads in block-based editors using a custom block.
- Auto-fetch ad unit size from AADS API based on Ad Unit ID.
- Supports adaptive and fixed-size ad units.
- Server-side block rendering for frontend output.

## Requirements

- WordPress `5.2+`
- PHP `5.2+`

## Installation (WordPress Site)

1. Copy the plugin folder into `wp-content/plugins/`.
2. Activate **AADS** from the WordPress admin Plugins page.
3. Configure either:
   - Widget: **Appearance > Widgets** > `AADS widget`
   - Block: add `AADS` block in the block editor

## Usage

### Widget

1. Go to **Appearance > Widgets**.
2. Add **AADS widget** to a widget area.
3. Set:
   - `Title`
   - `Ad Unit ID`
4. Save the widget.

The plugin fetches ad size from AADS API during widget save and renders the matching iframe.

### Gutenberg Block

1. Open a post/page in the block editor.
2. Insert the **AADS** block.
3. Enter:
   - `Title`
   - `Ad Unit ID`
4. Update/publish the content.

The block is server-rendered in PHP and auto-detects unit size using AADS API.

## Development

Block assets are in `trunk/src/` and compiled to `trunk/build/`.

### Install Dependencies

```bash
cd trunk
npm install
```

### Build for Production

```bash
npm run build
```

### Start Watch Mode

```bash
npm run start
```

## Repository Layout

- `trunk/`: Active development version.
- `tags/<version>/`: Snapshots for released versions (`1.0`, `1.1`, `1.2`, `2.0.1`, `2.1`).
- `assets/`: WordPress.org plugin assets.

## Changelog

### 2.1

- Minor fixes.

### 2.0.1

- Minor bugs fixed.
- Added support for block themes.
- Auto-detect ad unit size.

### 1.2

- Minor bugs fixed.

### 1.1

- Minor bugs fixed.
- Added extra `main.css` and `main.js`.

### 1.0

- Initial launch.

## License

GPL-2.0-or-later

See plugin header and `trunk/readme.txt` for WordPress.org metadata.
