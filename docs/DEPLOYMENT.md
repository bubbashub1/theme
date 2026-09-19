# Bubba Hub Theme Deployment

## Repository

https://github.com/bubbashub1/theme

The theme is intentionally separated from the directory plugin repository.

## Intended deployment flow

GitHub main
  -> GitHub Actions
  -> WordPress-ready theme package
  -> Deployer for Git
  -> WordPress /wp-content/themes/bubba-hub/

The workflow should mirror the proven Bubba Hub Directory deployment approach while targeting the theme directory.

## Deployment safety

A theme deployment must not:
- Delete the directory plugin
- Modify plugin files
- Replace WordPress core files
- Modify the database
- Change plugin configuration
- Disable active plugins

## Package structure

The deployed theme root should contain:
- style.css
- theme.json
- functions.php
- index.php
- templates/
- parts/
- patterns/
- assets/

Do not create an accidental nested structure such as theme/theme/style.css.

Final WordPress path:
 /wp-content/themes/bubba-hub/

## Staging first

All theme changes should first be deployed to:
https://staging.bubbahub.co.uk/

After deployment verify:
1. WordPress loads normally.
2. Theme activates without PHP errors.
3. Header and navigation render.
4. Homepage renders.
5. Directory pages render.
6. Listing pages render.
7. Advanced search renders.
8. Calendar renders.
9. My Hub renders.
10. Leader Portal renders.
11. Mobile layouts render.
12. No new critical browser console errors appear.
13. No expected plugin functionality disappears.

## Git workflow

Use small commits with clear messages.

Examples:
- Create Bubba Hub theme foundation
- Add global design tokens
- Add responsive header
- Style directory cards
- Add My Hub theme shell
- Add calendar presentation
- Prepare staging deployment

Avoid mixing unrelated plugin changes into theme commits.

## Rollback

Before production deployment, ensure the previous known-good theme version can be restored through Git/Deployer.

Visual changes should not require a database rollback.

## Repository relationship

Directory plugin:
https://github.com/bubbashub1/directory

Theme:
https://github.com/bubbashub1/theme

Each deploys independently so a theme change does not replace plugin files and a plugin change does not replace theme files.

## Future validation

The theme deployment workflow should validate:
- style.css exists
- theme.json exists
- Theme metadata is valid
- Required templates exist
- No .git directory is packaged
- No plugin source is packaged
- The theme folder structure is correct
