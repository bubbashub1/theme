# Bubba Hub Theme Architecture

## Separation of responsibilities

### Directory plugin

Repository: https://github.com/bubbashub1/directory

Responsible for:
- Directory listings and listing data
- Advanced search
- Calendar/planner
- My Hub
- Leader Portal
- Booking and payment functionality
- User dashboards
- Support requests and messaging
- Subscription functionality
- Listing forms
- Maps and location functionality

### Theme

Repository: https://github.com/bubbashub1/theme

Responsible for:
- Site-wide visual identity
- Header and navigation
- Footer
- Typography
- Colours
- Buttons and forms
- Cards
- Page layouts
- WordPress templates
- Responsive behaviour
- Accessibility presentation
- Global spacing and design tokens

## Dependency direction

The theme may style and accommodate the directory plugin, but the directory plugin must not depend on the theme for its core application logic.

WordPress
  |
  +-- Bubba Hub Theme
  |     +-- presentation
  |
  +-- Bubba Hub Directory Plugin
        +-- application functionality

## Compatibility principles

The theme must:
1. Avoid changing plugin database structures.
2. Avoid replacing plugin business logic.
3. Avoid registering duplicate post types.
4. Avoid duplicating plugin REST/AJAX endpoints.
5. Avoid taking ownership of booking/payment logic.
6. Avoid breaking plugin shortcodes or blocks.
7. Provide styling for plugin output where appropriate.
8. Remain usable when the directory plugin is temporarily disabled.

## My Hub and Leader Portal

These are application interfaces.

The theme provides their visual shell:
- Page width
- Typography
- Cards
- Tabs
- Buttons
- Forms
- Responsive layouts
- Alerts
- Empty states
- Navigation treatment

The plugin remains responsible for permissions, data, queries, AJAX/REST requests, bookings, messages, saved items, listings and schedules.

## Responsive design

Mobile is a first-class layout.

Requirements:
- No horizontal navigation overflow.
- Touch-friendly controls.
- Directory search must remain usable on small screens.
- Calendar views must switch to an appropriate mobile presentation.
- Cards and forms must not overflow.
- Important actions must remain easy to reach.

## Accessibility

Target WCAG 2.2 AA-aligned practices:
- Visible keyboard focus
- Logical heading hierarchy
- Adequate contrast
- Semantic navigation
- Proper form labels
- Descriptive links
- Accessible buttons
- Reduced-motion support where appropriate
- No essential information conveyed by colour alone

## Performance

Prefer lightweight CSS, progressive enhancement and WordPress core functionality.

Avoid unnecessary JavaScript and third-party dependencies.

## Visual CSS migration

Some site-wide visual CSS currently lives in the directory plugin.

Migration should be incremental:
1. Build equivalent theme styles.
2. Test the affected interface.
3. Confirm plugin functionality still works.
4. Remove duplicated plugin presentation CSS only after validation.
5. Deploy to staging.
6. Repeat for the next interface.

This avoids large risky CSS migrations.
