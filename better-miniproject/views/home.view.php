<?php require __DIR__ . '/partials/header.php'; ?>
<main style="max-width: 960px; margin: 24px auto; padding: 0 16px;">
    <h1 style="margin: 0 0 16px; font-size: 24px; color: #111827;">Home</h1>
    <h1> <?php echo $username; ?></h1>
    <form action="/home" method="POST" style="display: grid; gap: 12px; max-width: 640px;">
        <label style="display: grid; gap: 6px; color: #111827;">
            <span>Write something</span>
            <textarea name="content" rows="6" style="padding: 10px 12px; border: 1px solid #d1d5db; border-radius: 6px; resize: vertical;"></textarea>
        </label>

        <button type="submit" style="background: #111827; color: #ffffff; border: 0; padding: 10px 12px; border-radius: 6px; cursor: pointer; width: max-content;">Submit</button>
    </form>

    <form action="/logoff" method="POST" style="margin-top: 16px;">
        <button type="submit" style="background: #6b7280; color: #ffffff; border: 0; padding: 10px 12px; border-radius: 6px; cursor: pointer; width: max-content;">Log off</button>
    </form>
</main>

