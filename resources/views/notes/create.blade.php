<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecturer Note Upload</title>
    <style>
        /* Basic CSS to get the general layout, you'll expand this heavily */
        body { font-family: sans-serif; margin: 0; background-color: #f0f2f5; }
        .app-container { display: flex; min-height: 100vh; }
        .sidebar { width: 200px; background-color: #fff; padding: 20px; box-shadow: 2px 0 5px rgba(0,0,0,0.1); }
        .main-content { flex-grow: 1; padding: 20px; }
        .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
        .tab-navigation { display: flex; margin-bottom: 20px; }
        .tab { padding: 10px 15px; border: 1px solid #ccc; border-bottom: none; cursor: pointer; background-color: #eee; }
        .tab.active { background-color: #fff; border-color: #ccc; border-bottom-color: transparent; }
        .note-hero { background-color: #e0e0e0; padding: 40px; border-radius: 8px; text-align: center; margin-bottom: 20px; }
        .note-item { background-color: #fff; padding: 15px; border-radius: 8px; margin-bottom: 10px; display: flex; align-items: center; justify-content: space-between; box-shadow: 0 1px 3px rgba(0,0,0,0.1); }
        .floating-action-button { position: fixed; bottom: 30px; right: 30px; background-color: #4CAF50; color: white; border-radius: 50%; width: 60px; height: 60px; font-size: 30px; display: flex; justify-content: center; align-items: center; cursor: pointer; box-shadow: 0 2px 10px rgba(0,0,0,0.2); }
    </style>
</head>
<body>
    <div class="app-container">
        <aside class="sidebar">
            <nav>
                <ul>
                    <li><a href="#">Note</a></li>
                    <li><a href="#">Achievements</a></li>
                    <li><a href="#">Label</a></li>
                </ul>
            </nav>
        </aside>

        <main class="main-content">
            <header class="header">
                <button>&lt; Back</button>
                <div class="actions">
                    <button>...</button>
                    </div>
            </header>

            <h2>Note</h2>

            <nav class="tab-navigation">
                <div class="tab active">3.1 HTML</div>
                <div class="tab">3.2 CSS</div>
                <div class="tab">JS</div>
                <div class="tab">PHP</div>
                <div class="tab">+</div>
            </nav>

            <div class="header" style="justify-content: flex-end;">
                <button>Topic</button>
                <input type="search" placeholder="Search...">
            </div>

            <div class="note-hero">
                <h3>BAB 3.1: CSS</h3>
                <p></p>
                <div style="margin-top: 20px;">
                    <button>EDIT</button>
                    <button>DELETE</button>
                </div>
            </div>

            <div class="notes-list">
                <div class="note-item">
                    <div>
                        <h4>3.1.1</h4>
                        <p>Category - $$ - 1.2 miles away</p>
                        <p>Supporting line text lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                    <input type="checkbox"> </div>
                <div class="note-item">
                    <div>
                        <h4>3.1.2</h4>
                        <p>Category - $$ - 1.2 miles away</p>
                        <p>Supporting line text lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                    <input type="checkbox">
                </div>
                <div class="note-item">
                    <div>
                        <h4>3.1.3</h4>
                        <p>Category - $$ - 1.2 miles away</p>
                        <p>Supporting line text lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                    <input type="checkbox">
                </div>
            </div>

            <div class="floating-action-button">+</div>

        </main>
    </div>