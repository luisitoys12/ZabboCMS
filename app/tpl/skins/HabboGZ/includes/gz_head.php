<?php
/**
 * gz_head.php — Head + CSS base del skin HabboGZ
 * Se incluye al inicio de CADA template del skin.
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{pagetitle} &mdash; {shortname}</title>
    <link rel="icon" href="{cdnurl}/favicon.ico" type="image/x-icon">
    <!-- Bootstrap 4 (base del CMS) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- HabboGZ skin -->
    <link rel="stylesheet" href="{cdnurl}/skins/HabboGZ/assets/habbogz.css">
    <style>
        :root {
            --font-display: 'Rajdhani', 'Segoe UI', sans-serif;
            --font-body:    'Inter', 'Segoe UI', sans-serif;
        }
        body { font-family: var(--font-body); }
        h1,h2,h3,h4,h5,h6,.gz-title { font-family: var(--font-display); letter-spacing: 0.5px; }
    </style>
</head>
<body>
