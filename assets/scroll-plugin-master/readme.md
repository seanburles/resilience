# Swup Scroll plugin

## Instalation
This plugin can be installed with npm

```bash
npm install @swup/scroll-plugin
```

and included with import

```shell
import SwupScrollPlugin from '@swup/scroll-plugin';
```

or included from the dist folder

```html
<script src="./dist/SwupScrollPlugin.js"></script>
```

## Usage

To run this plugin, include an instance in the swup options.

```javascript
const swup = new Swup({
  plugins: [new SwupScrollPlugin()]
});
```

## Options
### doScrollingRightAway
`doScrollingRightAway` defines if swup is supposed to wait for the replace of the page to scroll to the top. 

### animateScroll
`animateScroll` defines whether the scroll animation is enabled or swup simply sets the scroll without animation instead.

### scrollFriction and scrollAcceleration
Animation of scroll is adjustable with options `scrollFriction` and `scrollAcceleration`.

### default options
```javascript
new SwupScrollPlugin({
    doScrollingRightAway: false,
    animateScroll: true,
    scrollFriction: 0.3,
    scrollAcceleration: 0.04,
});
```

## Changes of swup instance
Plugins ads `scrollTo` method to the swup instance, which can be later used for custom scrolling. 
Method accepts offset in pixels or element you want to scroll to.

Plugin also adds `scrollStart` and `scrollDone` events to swup, that can be listened to with `on` method.  
