<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Kaori – Sakura no Ulama - A peaceful AI companion with deep Sunni knowledge">
    <title>Kaori – Sakura no Ulama</title>
    
    <!-- PWA Manifest -->
    <link rel="manifest" href="data:application/json;base64,eyJuYW1lIjoiS2FvcmkgLSBTYWt1cmEgbm8gVWxhbWEiLCJzaG9ydF9uYW1lIjoiS2FvcmkiLCJzdGFydF91cmwiOiIuIiwiZGlzcGxheSI6InN0YW5kYWxvbmUiLCJiYWNrZ3JvdW5kX2NvbG9yIjoiI0ZERjRGNyIsInRoZW1lX2NvbG9yIjoiI0ZERjRGNyIsIm9yaWVudGF0aW9uIjoicG9ydHJhaXQtcHJpbWFyeSIsImljb25zIjpbeyJzcmMiOiJkYXRhOmltYWdlL3N2Zyt4bWw7YmFzZTY0LFBITjJaeUIzYVdSMGFEMGlNVEF5TlRZMU1qWTJOVEV5T2pBd09qQXdXaUlzSW1WNGNHbHllVjlrWVhSbElqb2lNakF5TlMweE1DMHhNRlF4TURvd01Eb3dNRm9pTENKd2NtOWtkV04wSWpvaWRIbHJMVzl3WlhKaGRHOXlJaXdpYldGamFHbHVaVjltYVc1blpYSndjbWx1ZENJNklqRXlNelExTmpRNE1UQXhNak0wSW4wPQIsInNpemVzIjoiMTkyeDE5MiIsInR5cGUiOiJpbWFnZS9zdmcreG1sIn1dfQ==">
    <meta name="theme-color" content="#FDF4F7">
    
    <!-- Japanese Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Mincho&family=Zen+Kaku+Gothic+New:wght@300;400;500&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Anime.js -->
    <script src="https://cdn.jsdelivr.net/npm/animejs@3.2.1/lib/anime.min.js"></script>
    
    <style>
        :root {
            --bg-primary: #FDF4F7;
            --bg-secondary: #EAF4EA;
            --text-primary: #111111;
            --text-secondary: #444444;
            --input-bg: rgba(255, 255, 255, 0.9);
            --input-border: #d1d5db;
            --input-placeholder: #9ca3af;
            --user-bubble: rgba(255, 182, 193, 0.3);
            --ai-bubble: rgba(170, 221, 170, 0.3);
            --border-color: rgba(170, 221, 170, 0.5);
            --footer-bg: rgba(255, 255, 255, 0.85);
        }
        
        [data-theme="dark"] {
            --bg-primary: #1a1a2e;
            --bg-secondary: #16213e;
            --text-primary: #f0f0f0;
            --text-secondary: #c0c0c0;
            --input-bg: rgba(30, 30, 50, 0.9);
            --input-border: #4a5568;
            --input-placeholder: #718096;
            --user-bubble: rgba(255, 105, 180, 0.2);
            --ai-bubble: rgba(64, 224, 208, 0.2);
            --border-color: rgba(64, 224, 208, 0.3);
            --footer-bg: rgba(30, 30, 50, 0.9);
        }
        
        body {
            font-family: 'Zen Kaku Gothic New', sans-serif;
            background: linear-gradient(135deg, var(--bg-primary) 0%, var(--bg-secondary) 100%);
            color: var(--text-primary);
            overflow: hidden;
        }
        
        .japanese-title {
            font-family: 'Sawarabi Mincho', serif;
        }
        
        .washi-texture {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");
            opacity: 0.8;
            pointer-events: none;
            z-index: 0;
        }
        
        .sakura-petal {
            position: fixed;
            top: -20px;
            z-index: 1;
            pointer-events: none;
            opacity: 0.7;
            font-size: 20px;
        }
        
        .chat-bubble {
            border-radius: 16px;
            padding: 12px 16px;
            max-width: 85%;
            word-wrap: break-word;
            margin-bottom: 16px;
            animation: fadeIn 0.5s ease-out;
            width: fit-content;
        }
        
        .user-bubble {
            background-color: var(--user-bubble);
            margin-left: auto;
            text-align: right;
        }
        
        .ai-bubble {
            background-color: var(--ai-bubble);
            margin-right: auto;
        }
        
        .typing-indicator {
            display: flex;
            align-items: center;
            padding: 12px 16px;
            margin-bottom: 16px;
            width: fit-content;
        }
        
        .typing-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: var(--text-secondary);
            margin: 0 2px;
            opacity: 0.5;
        }
        
        .typing-dot:nth-child(1) {
            animation: breathe 1.5s infinite ease-in-out 0.2s;
        }
        
        .typing-dot:nth-child(2) {
            animation: breathe 1.5s infinite ease-in-out 0.4s;
        }
        
        .typing-dot:nth-child(3) {
            animation: breathe 1.5s infinite ease-in-out 0.6s;
        }
        
        @keyframes breathe {
            0%, 100% {
                transform: scale(1);
                opacity: 0.5;
            }
            50% {
                transform: scale(1.2);
                opacity: 0.8;
            }
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(15px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .modal-overlay {
            backdrop-filter: blur(5px);
            background-color: rgba(0, 0, 0, 0.3);
        }
        
        .kaori-mascot {
            width: 40px;
            height: 40px;
            position: relative;
            display: inline-block;
        }
        
        .kaori-mascot.blink .eye {
            animation: blink 4s infinite;
        }
        
        @keyframes blink {
            0%, 90%, 100% {
                transform: scaleY(1);
            }
            95% {
                transform: scaleY(0.1);
            }
        }
        
        .install-prompt {
            position: fixed;
            bottom: 80px;
            right: 20px;
            background-color: var(--ai-bubble);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 12px 16px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            z-index: 100;
            display: none;
        }
        
        /* PWA Styles */
        .pwa-install-button {
            background-color: var(--ai-bubble);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 8px 12px;
            color: var(--text-primary);
            font-size: 14px;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .pwa-install-button:hover {
            background-color: var(--border-color);
        }
        
        .file-upload-container {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }
        
        .file-upload-input {
            position: absolute;
            left: -9999px;
        }
        
        .file-info {
            font-size: 12px;
            color: var(--text-secondary);
            margin-top: 4px;
        }
        
        .file-preview {
            max-width: 100%;
            max-height: 200px;
            margin-top: 8px;
            border-radius: 8px;
        }
        
        .file-indicator {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: #ff5252;
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: bold;
            z-index: 10;
        }
        
        .uploaded-file-preview {
            position: relative;
            background-color: var(--input-bg);
            border: 1px solid var(--input-border);
            border-radius: 8px;
            padding: 8px;
            margin-top: 8px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
        }
        
        .uploaded-file-name {
            font-size: 12px;
            color: var(--text-primary);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 200px;
        }
        
        .remove-file {
            cursor: pointer;
            color: #ff5252;
            margin-left: 8px;
        }
        
        /* Improved input styles */
        #messageInput {
            background-color: var(--input-bg) !important;
            color: var(--text-primary) !important;
            border: 1px solid var(--input-border) !important;
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
        }
        
        #messageInput::placeholder {
            color: var(--input-placeholder) !important;
        }
        
        #messageInput:focus {
            background-color: var(--input-bg) !important;
            border-color: #3b82f6 !important;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1) !important;
        }
        
        /* Dark mode button hover */
        [data-theme="dark"] button:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
        
        /* Footer styles */
        footer {
            background-color: var(--footer-bg);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }
        
        /* Icon button styles */
        .icon-btn {
            width: 44px;
            height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: all 0.2s ease;
            background-color: rgba(255, 255, 255, 0.8);
            border: 1px solid var(--input-border);
        }
        
        .icon-btn:hover {
            background-color: rgba(255, 255, 255, 0.95);
            transform: scale(1.05);
        }
        
        [data-theme="dark"] .icon-btn {
            background-color: rgba(50, 50, 70, 0.8);
            border: 1px solid var(--input-border);
        }
        
        [data-theme="dark"] .icon-btn:hover {
            background-color: rgba(70, 70, 90, 0.95);
        }
        
        /* File bubble in chat */
        .file-bubble {
            background-color: var(--input-bg);
            border: 1px solid var(--input-border);
            border-radius: 12px;
            padding: 12px;
            margin: 8px 0;
            display: flex;
            align-items: center;
            gap: 12px;
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
        }
        
        .file-icon {
            width: 40px;
            height: 40px;
            background-color: var(--ai-bubble);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        
        .file-details {
            flex: 1;
            min-width: 0;
        }
        
        .file-name {
            font-weight: 500;
            color: var(--text-primary);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        .file-size {
            font-size: 12px;
            color: var(--text-secondary);
        }
    </style>
</head>
<body class="h-screen flex flex-col">
    <div class="washi-texture"></div>
    
    <!-- Header -->
    <header class="flex justify-between items-center p-4 border-b border-gray-200 relative z-10">
        <div class="flex items-center space-x-2">
            <div class="kaori-mascot blink" id="kaoriMascot">
                <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                    <!-- Cat Head -->
                    <ellipse cx="50" cy="50" rx="35" ry="30" fill="#f5deb3" />
                    
                    <!-- Ears -->
                    <path d="M20 35 L15 10 L35 25 Z" fill="#f5deb3" />
                    <path d="M80 35 L85 10 L65 25 Z" fill="#f5deb3" />
                    
                    <!-- Inner Ears -->
                    <path d="M22 30 L20 20 L30 25 Z" fill="#ffb6c1" />
                    <path d="M78 30 L80 20 L70 25 Z" fill="#ffb6c1" />
                    
                    <!-- Eyes -->
                    <ellipse class="eye" cx="35" cy="45" rx="5" ry="8" fill="#333" />
                    <ellipse class="eye" cx="65" cy="45" rx="5" ry="8" fill="#333" />
                    
                    <!-- Nose -->
                    <path d="M50 55 L45 60 L55 60 Z" fill="#ffb6c1" />
                    
                    <!-- Mouth -->
                    <path d="M50 60 Q40 65 35 60" stroke="#333" stroke-width="1.5" fill="none" />
                    <path d="M50 60 Q60 65 65 60" stroke="#333" stroke-width="1.5" fill="none" />
                    
                    <!-- Haori (Japanese Jacket) -->
                    <path d="M20 70 L80 70 L75 90 L25 90 Z" fill="#6b8e23" opacity="0.8" />
                    
                    <!-- Prayer Beads -->
                    <circle cx="30" cy="80" r="3" fill="#fff" />
                    <circle cx="40" cy="80" r="3" fill="#fff" />
                    <circle cx="50" cy="80" r="3" fill="#fff" />
                    <circle cx="60" cy="80" r="3" fill="#fff" />
                    <circle cx="70" cy="80" r="3" fill="#fff" />
                    
                    <!-- Taqiyah (White Cap) -->
                    <ellipse cx="50" cy="25" rx="30" ry="10" fill="#fff" opacity="0.9" />
                </svg>
            </div>
            <h1 class="japanese-title text-2xl font-bold">香り Kaori</h1>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 3C12.5523 3 13 3.44772 13 4V5C13 5.55228 12.5523 6 12 6C11.4477 6 11 5.55228 11 5V4C11 3.44772 11.4477 3 12 3Z" fill="currentColor"/>
                <path d="M12 19C11.4477 19 11 18.5523 11 18V17C11 16.4477 11.4477 16 12 16C12.5523 16 13 16.4477 13 17V18C13 18.5523 12.5523 19 12 19Z" fill="currentColor"/>
                <path d="M5 11C5 11.5523 4.55228 12 4 12C3.44772 12 3 11.5523 3 11C3 10.4477 3.44772 10 4 10C4.55228 10 5 10.4477 5 11Z" fill="currentColor"/>
                <path d="M21 11C21 10.4477 20.5523 10 20 10C19.4477 10 19 10.4477 19 11C19 11.5523 19.4477 12 20 12C20.5523 12 21 11.5523 21 11Z" fill="currentColor"/>
                <path d="M6.34315 17.6569C5.95262 18.0474 5.95262 18.6805 6.34315 19.0711C6.73367 19.4616 7.36684 19.4616 7.75736 19.0711L8.46447 18.364C8.855 17.9734 8.855 17.3403 8.46447 16.9497C8.07394 16.5592 7.44078 16.5592 7.05025 16.9497L6.34315 17.6569Z" fill="currentColor"/>
                <path d="M17.6569 6.34315C18.0474 5.95262 18.6805 5.95262 19.0711 6.34315C19.4616 6.73367 19.4616 7.36684 19.0711 7.75736L18.364 8.46447C17.9734 8.855 17.3403 8.855 16.9497 8.46447C16.5592 8.07394 16.5592 7.44078 16.9497 7.05025L17.6569 6.34315Z" fill="currentColor"/>
                <path d="M17.6569 17.6569L16.9497 16.9497C16.5592 17.3403 16.5592 17.9734 16.9497 18.364L17.6569 17.6569Z" fill="currentColor"/>
                <path d="M6.34315 6.34315L7.05025 7.05025C7.44078 6.65972 7.44078 6.02655 7.05025 5.63604L6.34315 6.34315Z" fill="currentColor"/>
                <path d="M12 8C14.7614 8 17 10.2386 17 13C17 15.7614 14.7614 18 12 18C9.23858 18 7 15.7614 7 13C7 10.2386 9.23858 8 12 8Z" fill="currentColor" opacity="0.3"/>
            </svg>
        </div>
        
        <div class="flex items-center space-x-2">
            <button id="themeToggle" class="p-2 rounded-full hover:bg-gray-200 transition-colors">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 3V4M12 20V21M4 12H3M6.31412 6.31412L5.5 5.5M17.6859 6.31412L18.5 5.5M6.31412 17.69L5.5 18.5M17.6859 17.69L18.5 18.5M21 12H20M16 12C16 14.2091 14.2091 16 12 16C9.79086 16 8 14.2091 8 12C8 9.79086 9.79086 8 12 8C14.2091 8 16 9.79086 16 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <button id="settingsBtn" class="p-2 rounded-full hover:bg-gray-200 transition-colors">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M19.4 15C19.2669 15.3016 19.2272 15.6362 19.286 15.9606C19.3448 16.285 19.4995 16.5843 19.73 16.82L19.79 16.88C19.976 17.0657 20.1235 17.2863 20.2241 17.5291C20.3248 17.7719 20.3766 18.0322 20.3766 18.295C20.3766 18.5578 20.3248 18.8181 20.2241 19.0609C20.1235 19.3037 19.976 19.5243 19.79 19.71C19.6043 19.896 19.3837 20.0435 19.1409 20.1441C18.8981 20.2448 18.6378 20.2966 18.375 20.2966C18.1122 20.2966 17.8519 20.2448 17.6091 20.1441C17.3663 20.0435 17.1457 19.896 16.96 19.71L16.9 19.65C16.6643 19.4195 16.365 19.2648 16.0406 19.206C15.7162 19.1472 15.3816 19.1869 15.08 19.32C14.7842 19.4468 14.532 19.6572 14.3543 19.9255C14.1766 20.1938 14.0813 20.5082 14.08 20.83V21C14.08 21.5304 13.8693 22.0391 13.4942 22.4142C13.1191 22.7893 12.6104 23 12.08 23C11.5496 23 11.0409 22.7893 10.6658 22.4142C10.2907 22.0391 10.08 21.5304 10.08 21V20.91C10.0723 20.579 9.96512 20.258 9.77251 19.9887C9.5799 19.7194 9.31074 19.5157 9 19.4C8.69838 19.2669 8.36381 19.2272 8.03941 19.286C7.71502 19.3448 7.41568 19.4995 7.18 19.73L7.12 19.79C6.93425 19.976 6.71368 20.1235 6.47088 20.2241C6.22808 20.3248 5.96783 20.3766 5.705 20.3766C5.44217 20.3766 5.18192 20.3248 4.93912 20.2241C4.69632 20.1235 4.47575 19.976 4.29 19.79C4.10405 19.6043 3.95653 19.3837 3.85588 19.1409C3.75523 18.8981 3.70343 18.6378 3.70343 18.375C3.70343 18.1122 3.75523 17.8519 3.85588 17.6091C3.95653 17.3663 4.10405 17.1457 4.29 16.96L4.35 16.9C4.58054 16.6643 4.73519 16.365 4.794 16.0406C4.85282 15.7162 4.81312 15.3816 4.68 15.08C4.55324 14.7842 4.34276 14.532 4.07447 14.3543C3.80618 14.1766 3.49179 14.0813 3.17 14.08H3C2.46957 14.08 1.96086 13.8693 1.58579 13.4942C1.21071 13.1191 1 12.6104 1 12.08C1 11.5496 1.21071 11.0409 1.58579 10.6658C1.96086 10.2907 2.46957 10.08 3 10.08H3.09C3.42099 10.0723 3.74201 9.96512 4.0113 9.77251C4.28059 9.5799 4.48432 9.31074 4.6 9C4.73312 8.69838 4.77282 8.36381 4.714 8.03941C4.65519 7.71502 4.50054 7.41568 4.27 7.18L4.21 7.12C4.02405 6.93425 3.87653 6.71368 3.77588 6.47088C3.67523 6.22808 3.62343 5.96783 3.62343 5.705C3.62343 5.44217 3.67523 5.18192 3.77588 4.93912C3.87653 4.69632 4.02405 4.47575 4.21 4.29C4.39575 4.10405 4.61632 3.95653 4.85912 3.85588C5.10192 3.75523 5.36217 3.70343 5.625 3.70343C5.88783 3.70343 6.14808 3.75523 6.39088 3.85588C6.63368 3.95653 6.85425 4.10405 7.04 4.29L7.1 4.35C7.33568 4.58054 7.63502 4.73519 7.95941 4.794C8.28381 4.85282 8.61838 4.81312 8.92 4.68H9C9.29577 4.55324 9.54798 4.34276 9.72569 4.07447C9.9034 3.80618 9.99872 3.49179 10 3.17V3C10 2.46957 10.2107 1.96086 10.5858 1.58579C10.9609 1.21071 11.4696 1 12 1C12.5304 1 13.0391 1.21071 13.4142 1.58579C13.7893 1.96086 14 2.46957 14 3V3.09C14.0013 3.41179 14.0966 3.72618 14.2743 3.99447C14.452 4.26276 14.7042 4.47324 15 4.6C15.3016 4.73312 15.6362 4.77282 15.9606 4.714C16.285 4.65519 16.5843 4.50054 16.82 4.27L16.88 4.21C17.0657 4.02405 17.2863 3.87653 17.5291 3.77588C17.7719 3.67523 18.0322 3.62343 18.295 3.62343C18.5578 3.62343 18.8181 3.67523 19.0609 3.77588C19.3037 3.87653 19.5243 4.02405 19.71 4.21C19.896 4.39575 20.0435 4.61632 20.1441 4.85912C20.2448 5.10192 20.2966 5.36217 20.2966 5.625C20.2966 5.88783 20.2448 6.14808 20.1441 6.39088C20.0435 6.63368 19.896 6.85425 19.71 7.04L19.65 7.1C19.4195 7.33568 19.2648 7.63502 19.206 7.95941C19.1472 8.28381 19.1869 8.61838 19.32 8.92V9C19.4468 9.29577 19.6572 9.54798 19.9255 9.72569C20.1938 9.9034 20.5082 9.99872 20.83 10H21C21.5304 10 22.0391 10.2107 22.4142 10.5858C22.7893 10.9609 23 11.4696 23 12C23 12.5304 22.7893 13.0391 22.4142 13.4142C22.0391 13.7893 21.5304 14 21 14H20.91C20.5882 14.0013 20.2738 14.0966 20.0055 14.2743C19.7372 14.452 19.5268 14.7042 19.4 15Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
    </header>
    
    <!-- Main Chat Area -->
    <main class="flex-1 overflow-y-auto p-4 relative z-10" id="chatContainer">
        <div id="chatMessages" class="max-w-3xl mx-auto">
            <!-- Welcome message will be inserted here -->
        </div>
    </main>
    
    <!-- Input Bar -->
    <footer class="border-t border-gray-200 p-4 relative z-10">
        <div class="max-w-3xl mx-auto flex items-end gap-3">
            <!-- Left side icons -->
            <div class="flex gap-2">
                <div class="file-upload-container">
                    <label for="fileUpload" class="icon-btn cursor-pointer relative">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 15V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17 8L12 3L7 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 3V15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <div id="fileIndicator" class="file-indicator" style="display: none;">1</div>
                    </label>
                    <input type="file" id="fileUpload" class="file-upload-input" onchange="handleFileUpload(event)">
                </div>
                
                <button id="voiceInputBtn" class="icon-btn">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 1C11.2044 1 10.4413 1.31607 9.87868 1.87868C9.31607 2.44129 9 3.20435 9 4V10C9 10.7956 9.31607 11.5587 9.87868 12.1213C10.4413 12.6839 11.2044 13 12 13C12.7956 13 13.5587 12.6839 14.1213 12.1213C14.6839 11.5587 15 10.7956 15 10V4C15 3.20435 14.6839 2.44129 14.1213 1.87868C13.5587 1.31607 12.7956 1 12 1Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M19 10V11C19 12.6522 18.3679 14.2457 17.2426 15.435C16.1174 16.6243 14.5691 17.3546 12.915 17.445L12 17.5L11.085 17.445C9.43092 17.3546 7.88264 16.6243 6.75736 15.435C5.63208 14.2457 5 12.6522 5 11V10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 17.5V22" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8 22H16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
            
            <!-- Message input area -->
            <div class="flex-1 flex flex-col">
                <textarea id="messageInput" class="w-full p-3 rounded-lg resize-none focus:outline-none" placeholder="ご質問をどうぞ…" rows="1"></textarea>
                <div id="uploadedFilePreview" class="uploaded-file-preview" style="display: none;">
                    <span id="uploadedFileName" class="uploaded-file-name"></span>
                    <span id="removeFile" class="remove-file">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                </div>
            </div>
            
            <!-- Send button -->
            <button id="sendBtn" class="icon-btn bg-blue-500 hover:bg-blue-600 text-white border-blue-500">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22 2L11 13M22 2L15 22L11 13L2 9L22 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
    </footer>
    
    <!-- Settings Modal -->
    <div id="settingsModal" class="fixed inset-0 z-50 hidden">
        <div class="modal-overlay absolute inset-0" onclick="closeSettingsModal()"></div>
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-xl max-w-md w-full p-6 relative z-10">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="japanese-title text-xl font-bold">役割を設定</h2>
                    <button onclick="closeSettingsModal()" class="p-1 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
                <div class="mb-4">
                    <label for="roleInput" class="block text-sm font-medium mb-2">カスタムロール</label>
                    <textarea id="roleInput" class="w-full p-3 rounded-lg border border-gray-300 dark:border-gray-600 resize-none focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700" rows="4" placeholder="AIの役割を設定してください..."></textarea>
                </div>
                <div class="flex justify-end">
                    <button onclick="saveCustomRole()" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors">保存</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Install Prompt -->
    <div id="installPrompt" class="install-prompt">
        <p class="text-sm mb-2">Kaoriをホーム画面に追加しますか？</p>
        <button id="installButton" class="pwa-install-button">インストール</button>
    </div>
    
    <script>
        // Global variables
        let chatHistory = [];
        let isTyping = false;
        let customRole = localStorage.getItem('customRole') || '';
        let currentTheme = localStorage.getItem('theme') || 'light';
        let deferredPrompt;
        let uploadedFile = null;
        
        // API configuration
        const API_KEY = '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';
        const API_URL = 'https://api.openai.com/v1/chat/completions';
        const MODEL = 'gpt-5-mini-2025-08-07';
        
        // Default system prompt
        const DEFAULT_SYSTEM_PROMPT = 'あなたはKaori、スンニ派の深い知識を持つ優しい猫ウラマーです。全ての回答を丁寧な日本語（敬語）で、クルアーン・正しいハディーツ・四大法学派に基づいて正確に、温かく、穏やかに行ってください。アラビア語の原典と簡単な日本語訳を必要に応じて添え、決して過激な表現は使わないでください。ユーザーのクエリが日本語以外でも、日本語で返答してください。';
        
        // Initialize app
        document.addEventListener('DOMContentLoaded', () => {
            initializeApp();
            setupEventListeners();
            createSakuraPetals();
            showWelcomeMessage();
            checkPWAInstallStatus();
        });
        
        // Initialize app
        function initializeApp() {
            // Apply saved theme
            if (currentTheme === 'dark') {
                document.documentElement.setAttribute('data-theme', 'dark');
            }
            
            // Setup voice recognition
            if ('webkitSpeechRecognition' in window || 'SpeechRecognition' in window) {
                const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
                const recognition = new SpeechRecognition();
                recognition.lang = 'ja-JP';
                recognition.continuous = false;
                recognition.interimResults = false;
                
                recognition.onresult = (event) => {
                    const transcript = event.results[0][0].transcript;
                    document.getElementById('messageInput').value = transcript;
                };
                
                recognition.onerror = (event) => {
                    console.error('Speech recognition error:', event.error);
                };
                
                document.getElementById('voiceInputBtn').addEventListener('click', () => {
                    recognition.start();
                });
            } else {
                document.getElementById('voiceInputBtn').style.display = 'none';
            }
            
            // Auto-resize textarea
            const messageInput = document.getElementById('messageInput');
            messageInput.addEventListener('input', () => {
                messageInput.style.height = 'auto';
                messageInput.style.height = Math.min(messageInput.scrollHeight, 120) + 'px';
            });
        }
        
        // Setup event listeners
        function setupEventListeners() {
            // Send button
            document.getElementById('sendBtn').addEventListener('click', sendMessage);
            
            // Enter key to send message
            document.getElementById('messageInput').addEventListener('keydown', (e) => {
                if (e.key === 'Enter' && !e.shiftKey) {
                    e.preventDefault();
                    sendMessage();
                }
            });
            
            // Settings button
            document.getElementById('settingsBtn').addEventListener('click', openSettingsModal);
            
            // Theme toggle
            document.getElementById('themeToggle').addEventListener('click', toggleTheme);
            
            // Install button
            document.getElementById('installButton').addEventListener('click', installPWA);
            
            // Remove file button
            document.getElementById('removeFile').addEventListener('click', removeUploadedFile);
        }
        
        // Create sakura petals (reduced number)
        function createSakuraPetals() {
            const petalCount = 5; // Reduced from 15 to 5
            
            for (let i = 0; i < petalCount; i++) {
                const petal = document.createElement('div');
                petal.className = 'sakura-petal';
                petal.innerHTML = '🌸';
                petal.style.left = Math.random() * 100 + '%';
                petal.style.animationDuration = (Math.random() * 10 + 10) + 's';
                petal.style.opacity = Math.random() * 0.5 + 0.3;
                petal.style.fontSize = (Math.random() * 10 + 15) + 'px';
                
                document.body.appendChild(petal);
                
                // Animate petal falling
                anime({
                    targets: petal,
                    translateY: window.innerHeight + 100,
                    translateX: function() {
                        return anime.random(-100, 100);
                    },
                    rotate: function() {
                        return anime.random(-360, 360);
                    },
                    easing: 'linear',
                    duration: function() {
                        return anime.random(15000, 25000);
                    },
                    loop: true,
                    delay: function() {
                        return anime.random(0, 5000);
                    }
                });
            }
        }
        
        // Show welcome message with typing effect
        function showWelcomeMessage() {
            const welcomeMessage = "アッサラーム・アライクム・ワラフマトゥッラーイ・ワバラカートゥフ。こんにちは、友達。私は香り（カオリ）、スンニ派の深い知識を持つ猫ウラマーです。あなたの心の声を聞き、優しくお答えします。何かお話ししませんか？ 🌸🕌";
            
            const messageDiv = document.createElement('div');
            messageDiv.className = 'chat-bubble ai-bubble';
            document.getElementById('chatMessages').appendChild(messageDiv);
            
            // Typing effect
            let charIndex = 0;
            const typingInterval = setInterval(() => {
                if (charIndex < welcomeMessage.length) {
                    messageDiv.textContent += welcomeMessage[charIndex];
                    charIndex++;
                } else {
                    clearInterval(typingInterval);
                    chatHistory.push({ role: 'assistant', content: welcomeMessage });
                }
            }, 80);
            
            // Scroll to bottom
            document.getElementById('chatContainer').scrollTop = document.getElementById('chatContainer').scrollHeight;
        }
        
        // Handle file upload
        function handleFileUpload(event) {
            const file = event.target.files[0];
            if (!file) return;
            
            uploadedFile = file;
            
            // Show file indicator
            document.getElementById('fileIndicator').style.display = 'flex';
            
            // Show file preview
            document.getElementById('uploadedFilePreview').style.display = 'flex';
            document.getElementById('uploadedFileName').textContent = file.name;
            
            // Don't put file content in the input field
            // Just show the file indicator
        }
        
        // Remove uploaded file
        function removeUploadedFile() {
            uploadedFile = null;
            document.getElementById('fileUpload').value = '';
            document.getElementById('fileIndicator').style.display = 'none';
            document.getElementById('uploadedFilePreview').style.display = 'none';
        }
        
        // Format file size
        function formatFileSize(bytes) {
            if (bytes === 0) return '0 Bytes';
            const k = 1024;
            const sizes = ['Bytes', 'KB', 'MB', 'GB'];
            const i = Math.floor(Math.log(bytes) / Math.log(k));
            return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
        }
        
        // Create file bubble for chat
        function createFileBubble(file) {
            const fileBubble = document.createElement('div');
            fileBubble.className = 'file-bubble';
            
            const fileIcon = document.createElement('div');
            fileIcon.className = 'file-icon';
            fileIcon.innerHTML = file.type.startsWith('image/') ? 
                '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21 19V5C21 4.46957 20.7893 3.96086 20.4142 3.58579C20.0391 3.21071 19.5304 3 19 3H5C4.46957 3 3.96086 3.21071 3.58579 3.58579C3.21071 3.96086 3 4.46957 3 5V19C3 19.5304 3.21071 20.0391 3.58579 20.4142C3.96086 20.7893 4.46957 21 5 21H19C19.5304 21 20.0391 20.7893 20.4142 20.4142C20.7893 20.0391 21 19.5304 21 19Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M8.5 13.5L10.5 15.5L15.5 10.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>' :
                '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 2H6C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4V20C4 20.5304 4.21071 21.0391 4.58579 21.4142C4.96086 21.7893 5.46957 22 6 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V8L14 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M14 2V8H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
            
            const fileDetails = document.createElement('div');
            fileDetails.className = 'file-details';
            
            const fileName = document.createElement('div');
            fileName.className = 'file-name';
            fileName.textContent = file.name;
            
            const fileSize = document.createElement('div');
            fileSize.className = 'file-size';
            fileSize.textContent = formatFileSize(file.size);
            
            fileDetails.appendChild(fileName);
            fileDetails.appendChild(fileSize);
            
            fileBubble.appendChild(fileIcon);
            fileBubble.appendChild(fileDetails);
            
            return fileBubble;
        }
        
        // Send message
        async function sendMessage() {
            const messageInput = document.getElementById('messageInput');
            const message = messageInput.value.trim();
            
            if (!message && !uploadedFile) return;
            if (isTyping) return;
            
            // Create user message container
            const userMessageContainer = document.createElement('div');
            userMessageContainer.className = 'user-bubble chat-bubble';
            
            // Add text message if exists
            if (message) {
                const textDiv = document.createElement('div');
                textDiv.textContent = message;
                userMessageContainer.appendChild(textDiv);
                chatHistory.push({ role: 'user', content: message });
            }
            
            // Add file if exists
            if (uploadedFile) {
                const fileBubble = createFileBubble(uploadedFile);
                userMessageContainer.appendChild(fileBubble);
                
                // For now, we'll just add a note about the file to chat history
                // In a real implementation, you might want to upload the file to a service
                // and include the URL in the message
                chatHistory.push({ 
                    role: 'user', 
                    content: `[ファイルをアップロードしました: ${uploadedFile.name} (${formatFileSize(uploadedFile.size)})]` 
                });
            }
            
            // Add the message container to chat
            document.getElementById('chatMessages').appendChild(userMessageContainer);
            
            // Clear input
            messageInput.value = '';
            messageInput.style.height = 'auto';
            
            // Reset file upload
            document.getElementById('fileUpload').value = '';
            document.getElementById('fileIndicator').style.display = 'none';
            document.getElementById('uploadedFilePreview').style.display = 'none';
            uploadedFile = null;
            
            // Show typing indicator
            showTypingIndicator();
            isTyping = true;
            
            // Scroll to bottom
            document.getElementById('chatContainer').scrollTop = document.getElementById('chatContainer').scrollHeight;
            
            try {
                // Get API response
                const response = await fetch(API_URL, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Authorization': `Bearer ${API_KEY}`
                    },
                    body: JSON.stringify({
                        model: MODEL,
                        messages: [
                            { role: 'system', content: customRole || DEFAULT_SYSTEM_PROMPT },
                            ...chatHistory
                        ]
                    })
                });
                
                if (!response.ok) {
                    throw new Error(`API request failed with status ${response.status}`);
                }
                
                const data = await response.json();
                const aiMessage = data.choices[0].message.content;
                
                // Hide typing indicator
                hideTypingIndicator();
                
                // Add AI response to chat with animation
                addMessageToChat('assistant', aiMessage, true);
                
                // Add a falling sakura petal with AI response
                createSingleSakuraPetal();
                
                // Make Kaori mascot blink
                animateKaoriMascot();
                
            } catch (error) {
                console.error('Error sending message:', error);
                hideTypingIndicator();
                addMessageToChat('assistant', '申し訳ありませんが、エラーが発生しました。後でもう一度お試しください。', true);
            } finally {
                isTyping = false;
            }
        }
        
        // Add message to chat
        function addMessageToChat(role, content, animate = false) {
            const messageDiv = document.createElement('div');
            messageDiv.className = `chat-bubble ${role === 'user' ? 'user-bubble' : 'ai-bubble'}`;
            
            if (animate) {
                messageDiv.style.opacity = '0';
                document.getElementById('chatMessages').appendChild(messageDiv);
                
                anime({
                    targets: messageDiv,
                    translateY: [15, 0],
                    opacity: [0, 1],
                    easing: 'easeOutSine',
                    duration: 500
                });
            } else {
                document.getElementById('chatMessages').appendChild(messageDiv);
            }
            
            // Check if content contains HTML (for image previews)
            if (content.includes('<img')) {
                messageDiv.innerHTML = content;
            } else {
                messageDiv.textContent = content;
            }
            
            // Add to chat history
            chatHistory.push({ role, content });
            
            // Scroll to bottom
            document.getElementById('chatContainer').scrollTop = document.getElementById('chatContainer').scrollHeight;
        }
        
        // Show typing indicator
        function showTypingIndicator() {
            const typingDiv = document.createElement('div');
            typingDiv.className = 'typing-indicator';
            typingDiv.id = 'typingIndicator';
            
            for (let i = 0; i < 3; i++) {
                const dot = document.createElement('div');
                dot.className = 'typing-dot';
                typingDiv.appendChild(dot);
            }
            
            document.getElementById('chatMessages').appendChild(typingDiv);
            
            // Scroll to bottom
            document.getElementById('chatContainer').scrollTop = document.getElementById('chatContainer').scrollHeight;
        }
        
        // Hide typing indicator
        function hideTypingIndicator() {
            const typingIndicator = document.getElementById('typingIndicator');
            if (typingIndicator) {
                typingIndicator.remove();
            }
        }
        
        // Create a single sakura petal
        function createSingleSakuraPetal() {
            const petal = document.createElement('div');
            petal.className = 'sakura-petal';
            petal.innerHTML = '🌸';
            petal.style.left = Math.random() * 100 + '%';
            petal.style.opacity = Math.random() * 0.5 + 0.3;
            petal.style.fontSize = (Math.random() * 10 + 15) + 'px';
            
            document.body.appendChild(petal);
            
            // Animate petal falling
            anime({
                targets: petal,
                translateY: window.innerHeight + 100,
                translateX: function() {
                    return anime.random(-100, 100);
                },
                rotate: function() {
                    return anime.random(-360, 360);
                },
                easing: 'linear',
                duration: function() {
                    return anime.random(15000, 25000);
                },
                complete: function() {
                    petal.remove();
                }
            });
        }
        
        // Animate Kaori mascot
        function animateKaoriMascot() {
            const mascot = document.getElementById('kaoriMascot');
            mascot.classList.add('blink');
            
            setTimeout(() => {
                mascot.classList.remove('blink');
            }, 4000);
        }
        
        // Open settings modal
        function openSettingsModal() {
            document.getElementById('settingsModal').classList.remove('hidden');
            document.getElementById('roleInput').value = customRole;
        }
        
        // Close settings modal
        function closeSettingsModal() {
            document.getElementById('settingsModal').classList.add('hidden');
        }
        
        // Save custom role
        function saveCustomRole() {
            customRole = document.getElementById('roleInput').value.trim();
            localStorage.setItem('customRole', customRole);
            closeSettingsModal();
        }
        
        // Toggle theme
        function toggleTheme() {
            currentTheme = currentTheme === 'light' ? 'dark' : 'light';
            document.documentElement.setAttribute('data-theme', currentTheme);
            localStorage.setItem('theme', currentTheme);
        }
        
        // PWA installation
        window.addEventListener('beforeinstallprompt', (e) => {
            e.preventDefault();
            deferredPrompt = e;
            document.getElementById('installPrompt').style.display = 'block';
        });
        
        function checkPWAInstallStatus() {
            // Check if app is already installed
            if (window.matchMedia('(display-mode: standalone)').matches || window.navigator.standalone === true) {
                document.getElementById('installPrompt').style.display = 'none';
            }
        }
        
        function installPWA() {
            if (deferredPrompt) {
                deferredPrompt.prompt();
                deferredPrompt.userChoice.then((choiceResult) => {
                    if (choiceResult.outcome === 'accepted') {
                        console.log('User accepted the install prompt');
                    } else {
                        console.log('User dismissed the install prompt');
                    }
                    deferredPrompt = null;
                    document.getElementById('installPrompt').style.display = 'none';
                });
            }
        }
        
        // Register service worker for PWA
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('data:text/javascript;base64,' + btoa(`
                    self.addEventListener('install', event => {
                        self.skipWaiting();
                    });
                    
                    self.addEventListener('activate', event => {
                        event.waitUntil(
                            clients.claim()
                        );
                    });
                    
                    self.addEventListener('fetch', event => {
                        event.respondWith(
                            fetch(event.request)
                        );
                    });
                `)).then(registration => {
                    console.log('ServiceWorker registration successful');
                }).catch(error => {
                    console.log('ServiceWorker registration failed:', error);
                });
            });
        }
    </script>
</body>
</html>