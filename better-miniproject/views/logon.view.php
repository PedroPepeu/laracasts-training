<?php require __DIR__ . '/partials/header.php'; ?>
<main style="max-width: 960px; margin: 24px auto; padding: 0 16px;">
    <h1 style="margin: 0 0 16px; font-size: 24px; color: #111827;">Create an account</h1>
    <form action="/logon" method="POST" style="display: grid; gap: 12px; max-width: 420px;">
        <label style="display: grid; gap: 6px; color: #111827;">
            <span>Name</span>
            <input type="text" name="name" required style="padding: 8px 10px; border: 1px solid #d1d5db; border-radius: 6px;" value="<?php echo isset($name) ? htmlspecialchars($name, ENT_QUOTES) : ''; ?>" />
        </label>

        <label style="display: grid; gap: 6px; color: #111827;">
            <span>Password</span>
            <input type="password" name="password" required style="padding: 8px 10px; border: 1px solid #d1d5db; border-radius: 6px;" />
        </label>

        <label style="display: grid; gap: 6px; color: #111827;">
            <span>Confirm password</span>
            <input type="password" name="password_confirmation" required style="padding: 8px 10px; border: 1px solid #d1d5db; border-radius: 6px;" />
        </label>

        <button type="submit" style="background: #111827; color: #ffffff; border: 0; padding: 10px 12px; border-radius: 6px; cursor: pointer;">Create account</button>
    </form>

    <p style="margin-top: 12px; color: #4b5563;">Already have an account? <a href="/" style="color: #111827;">Sign in</a></p>

    <?php echo isset($errors) ? '<p style="color: #dc2626;">' . implode('<br>', $errors) . '</p>' : ''; ?>
</main>

