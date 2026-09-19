# Bubba Hub WordPress Theme

Official Bubba Hub WordPress theme repository.

Repository: https://github.com/bubbashub1/theme

## Purpose

This repository contains the Bubba Hub presentation layer: the WordPress theme responsible for how Bubba Hub looks, feels and behaves.

The existing Bubba Hub Directory plugin remains responsible for directory functionality, listings, search, calendar/planner, My Hub, Leader Portal, bookings and related application features.

## Architecture

Theme = branding, layout, typography, navigation, templates, global styles and responsive presentation.

Directory plugin = listings, directory data, advanced search, calendar/planner, My Hub, Leader Portal, bookings and application logic.

WordPress = content, users, media and administration.

Deployer for Git = deployment from GitHub to WordPress.

## Design direction

Bubba Hub should feel warm, friendly, reassuring, community-led, modern and calm.

The visual direction takes inspiration from the calm editorial qualities the team liked in Happiness Coach, without copying another theme.

Typography:
- Headings: Playfair Display
- Body/UI: Work Sans

Core colours:
- Ink: #3f3b36
- Soft ink: #625d55
- Paper: #fbf8f2
- Surface: #fffdf9
- Cream: #f4ede1
- Sage: #dfe9df
- Deep sage: #567064
- Peach: #efc6b5
- Coral: #d98270
- Gold: #d9ad63
- Line: #e6ded2

## Planned structure

The theme will use a modern WordPress structure with templates, template parts, patterns, assets and a global theme.json design system.

## Plugin compatibility

The theme must support the existing Bubba Hub Directory plugin, including:
- Directory listings
- Advanced search
- Calendar/planner
- My Hub
- Leader Portal
- Support requests and messaging
- Listing cards and maps
- Booking interfaces
- Subscription interfaces
- Front-end listing forms
- Existing plugin shortcodes and generated markup

The theme provides presentation. The plugin provides application logic.

## Development rule

Make changes in small, testable commits.

Do not replace working plugin functionality with theme code merely to achieve a visual result.

See:
- docs/ARCHITECTURE.md
- docs/DESIGN-SYSTEM.md
- docs/DEPLOYMENT.md
