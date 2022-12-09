# Block Based Theme Starter

Hi. I'm a block starter theme. I'm a theme meant for hacking so don't use me as a Parent Theme. Instead, try turning me into the next, most awesome, WordPress theme out there. That's what I'm here for!

You'll need to change all instances of the name: `create-block-based-theme` and namespace `createBlockBasedTheme` .

This theme uses `wp-scripts` and is set to be use with vanilla css, you can simply change it to `sass` by changing the styles extensions. ex.

```
 src/css/header.css will be src/sass/header.sass
```

## Setup

From the command line, change directories to your new theme directory:

```
cd /wp-content/themes/your-theme
```

Install theme dependencies and trigger an initial build.

```
npm install
```

### Development

From the command line, type any of the following to perform an action:

| Command         | Action                                                       |
|-----------------|--------------------------------------------------------------|
| `npm run start` | Builds assets and starts Live Reload and Browsersync servers |
| `npm run build` | Builds production-ready assets for a deployment              |

---
`create-block-based-theme` is free software, and is released under the terms of the GNU General Public License version 2 or any later version. See LICENSE.md for complete license.
