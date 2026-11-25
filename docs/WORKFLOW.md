# Local to staging to production

## Rules
- Code flows one way: local -> staging -> production, through Git (theme and site plugin only).
- Content and orders flow the other way: production -> staging -> local, never back.
- Never overwrite the production database from local once the store is live (orders live there).
- Secrets (payment keys, analytics ID) live in wp-config.php, never in Git.
- Sandbox gateway keys in local and staging; live keys only in production.
- Staging: "Discourage search engines" on, and a public HTTPS URL for webhooks.

## Environment constants (wp-config.php, per environment)
- WP_ENVIRONMENT_TYPE = local | staging | production
- NORTHLINE_GA4_ID = analytics ID (production only)

## Steps
1. Work on a branch in local. Commit small changes.
2. Merge to main when it works locally.
3. Backup staging, deploy main to staging, run the smoke test.
4. Backup production, deploy the same commit to production, run the smoke test again.
5. Roll back by redeploying the previous commit and restoring the backup if needed.

## Smoke test
Home loads, product page loads, add to cart, checkout in sandbox (staging), order status and
stock correct, emails sent, no PHP errors in the log.
