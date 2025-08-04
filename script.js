// Loading Screen
window.addEventListener('load', function() {
    const loadingScreen = document.querySelector('.loading-screen');
    const loaderText = document.querySelector('.loader-text');
    
    // Create loading text animation
    const loadingTexts = ['Loading...', 'Preparing...', 'Almost ready...', 'Welcome!'];
    let textIndex = 0;
    
    const textInterval = setInterval(() => {
        loaderText.textContent = loadingTexts[textIndex];
        textIndex = (textIndex + 1) % loadingTexts.length;
    }, 500);
    
    setTimeout(() => {
        clearInterval(textInterval);
        loadingScreen.classList.add('fade-out');
        setTimeout(() => {
            loadingScreen.style.display = 'none';
        }, 500);
    }, 1000);
});

// Welcome Modal Functions
function showWelcomeModal() {
    const modal = document.getElementById('welcomeModal');
    if (modal) {
        modal.classList.add('show');
        
        // Start typing effect only if text is empty
        const typingText = document.getElementById('typingText');
        if (typingText && typingText.textContent.trim() === '') {
            const fullText = "Mình không biết bạn là ai, đang ở đâu, hay đang trải qua những điều gì.\n\nNhưng nếu bạn tình cờ đọc được những dòng này, thì mình mong bạn luôn cảm thấy đủ đầy – không phải vì mọi thứ đều hoàn hảo, mà vì bạn đủ dịu dàng để thấy bình yên trong những điều nhỏ nhất.";
            
            typingText.style.borderRight = '2px solid #667eea';
            typingText.style.whiteSpace = 'pre-line';
            
            let i = 0;
            const typeWriter = () => {
                if (i < fullText.length) {
                    if (fullText.charAt(i) === '\n') {
                        typingText.innerHTML += '<br>';
                    } else {
                        typingText.innerHTML += fullText.charAt(i);
                    }
                    i++;
                    setTimeout(typeWriter, 50);
                } else {
                    typingText.style.borderRight = 'none';
                }
            };
            
            setTimeout(typeWriter, 1000);
        }
    }
}

function closeWelcomeModal() {
    const modal = document.getElementById('welcomeModal');
    if (modal) {
        modal.classList.remove('show');
    }
}

// Mobile Navigation
const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav-menu');

hamburger.addEventListener('click', function() {
    hamburger.classList.toggle('active');
    navMenu.classList.toggle('active');
});

// Close mobile menu when clicking on a link
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', () => {
        hamburger.classList.remove('active');
        navMenu.classList.remove('active');
    });
});

// Smooth scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            const targetPosition = target.offsetTop - 70;
            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
        }
    });
});

// Navbar background change on scroll
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    const scrolled = window.pageYOffset;
    
    if (scrolled > 100) {
        navbar.style.background = 'rgba(255, 255, 255, 0.98)';
        navbar.style.boxShadow = '0 8px 32px rgba(31, 38, 135, 0.37)';
    } else {
        navbar.style.background = 'rgba(255, 255, 255, 0.95)';
        navbar.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.1)';
    }
});

// Music Player Variables
let currentSongIndex = 0;
let isPlaying = false;
let hasInteracted = false;

const songs = [
    { title: 'Bài hát 1', artist: 'Hoà Nguyễn', src: 'music/song1.mp3' },
    { title: 'Bài hát 2', artist: 'Hoà Nguyễn', src: 'music/song2.mp3' },
    { title: 'Bài hát 3', artist: 'Hoà Nguyễn', src: 'music/song3.mp3' },
    { title: 'Bài hát 4', artist: 'Hoà Nguyễn', src: 'music/song4.mp3' }
];

const audioPlayer = document.getElementById('audioPlayer');
const playBtn = document.querySelector('.play-btn');
const songTitle = document.querySelector('.song-title');
const songArtist = document.querySelector('.song-artist');

// Initialize music player
function initMusicPlayer() {
    console.log('Initializing music player...');
    if (!audioPlayer) {
        console.log('Audio player not found!');
        return;
    }
    
    console.log('Audio player found, setting up...');
    // Random song on page load
    currentSongIndex = Math.floor(Math.random() * songs.length);
    console.log('Initial random song index:', currentSongIndex);
    audioPlayer.src = songs[currentSongIndex].src;
    updateSongInfo();
    
    // Try to auto-play immediately (if browser allows)
    audioPlayer.play().then(() => {
        console.log('Auto-play on load successful!');
        isPlaying = true;
        updatePlayButton();
    }).catch(e => {
        console.log('Auto-play on load failed:', e);
        // Add event listeners for auto-play on interaction
        document.addEventListener('click', handleFirstInteraction);
        document.addEventListener('scroll', handleFirstInteraction);
        document.addEventListener('mousemove', handleFirstInteraction);
        console.log('Event listeners added for auto-play');
    });
    
    // Audio event listeners
    audioPlayer.addEventListener('ended', nextSong);
    audioPlayer.addEventListener('play', () => {
        isPlaying = true;
        updatePlayButton();
    });
    audioPlayer.addEventListener('pause', () => {
        isPlaying = false;
        updatePlayButton();
    });
    console.log('Music player initialized successfully!');
}

// Handle first user interaction to enable auto-play
function handleFirstInteraction() {
    console.log('User interaction detected!');
    if (!hasInteracted && audioPlayer) {
        console.log('Starting auto-play...');
        hasInteracted = true;
        // Remove event listeners after first interaction
        document.removeEventListener('click', handleFirstInteraction);
        document.removeEventListener('scroll', handleFirstInteraction);
        document.removeEventListener('mousemove', handleFirstInteraction);
        
        // Auto-play random song
        currentSongIndex = Math.floor(Math.random() * songs.length);
        console.log('Random song index:', currentSongIndex);
        audioPlayer.src = songs[currentSongIndex].src;
        updateSongInfo();
        
        // Try multiple ways to play
        const playPromise = audioPlayer.play();
        if (playPromise !== undefined) {
            playPromise.then(() => {
                console.log('Auto-play started successfully!');
                isPlaying = true;
                updatePlayButton();
            }).catch(e => {
                console.log('Auto-play prevented:', e);
                // Try again with user gesture
                document.addEventListener('click', () => {
                    audioPlayer.play().then(() => {
                        console.log('Auto-play started on click!');
                        isPlaying = true;
                        updatePlayButton();
                    });
                }, { once: true });
            });
        }
    }
}

// Toggle play/pause
function togglePlay() {
    if (audioPlayer && audioPlayer.paused) {
        audioPlayer.play();
    } else if (audioPlayer) {
        audioPlayer.pause();
    }
}

// Play previous song
function previousSong() {
    if (!audioPlayer) return;
    currentSongIndex = (currentSongIndex - 1 + songs.length) % songs.length;
    audioPlayer.src = songs[currentSongIndex].src;
    updateSongInfo();
    if (isPlaying) {
        audioPlayer.play();
    }
}

// Play next song
function nextSong() {
    if (!audioPlayer) return;
    currentSongIndex = (currentSongIndex + 1) % songs.length;
    audioPlayer.src = songs[currentSongIndex].src;
    updateSongInfo();
    if (isPlaying) {
        audioPlayer.play();
    }
}

// Update play button icon
function updatePlayButton() {
    if (!playBtn) return;
    const playIcon = playBtn.querySelector('i');
    if (playIcon) {
        if (isPlaying) {
            playIcon.className = 'fas fa-pause';
        } else {
            playIcon.className = 'fas fa-play';
        }
    }
}

// Update song info
function updateSongInfo() {
    if (songTitle && songArtist) {
        songTitle.textContent = songs[currentSongIndex].title;
        songArtist.textContent = songs[currentSongIndex].artist;
    }
}

// Counter animation for age
function animateCounter(element, target, duration = 1500) {
    let start = 0;
    const increment = target / (duration / 16);

    function updateCounter() {
        start += increment;
        if (start < target) {
            element.textContent = Math.floor(start);
            requestAnimationFrame(updateCounter);
        } else {
            element.textContent = target;
        }
    }

    updateCounter();
}

// Initialize everything when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM loaded successfully');
    
    // Start counter animation
    const ageElement = document.querySelector('.stat-number[data-target]');
    if (ageElement) {
        const target = parseInt(ageElement.getAttribute('data-target'));
        setTimeout(() => {
            animateCounter(ageElement, target, 1500);
        }, 1500);
    }
    
    // Initialize music player
    initMusicPlayer();
    
    // Auto play/pause based on tab focus
    let wasPlaying = false;
    document.addEventListener('visibilitychange', function() {
        const audioPlayer = document.getElementById('audioPlayer');
        if (audioPlayer) {
            if (document.hidden) {
                // Tab is hidden - pause music and remember state
                wasPlaying = !audioPlayer.paused;
                audioPlayer.pause();
            } else {
                // Tab is visible - play music if it was playing before
                if (wasPlaying) {
                    audioPlayer.play().catch(e => {
                        console.log('Failed to resume music:', e);
                    });
                }
            }
        }
    });
    
    console.log('🎉 Website loaded successfully! Welcome to hoanguyen\'s personal website! 🚀');
});

// Projects Management System
const projectsData = [
    {
        title: "Vũ Trụ Bình Yên",
        description: "Một không gian vũ trụ 3D với 120k particles ánh sáng, rainbow rings đầy màu sắc và sun rays ấm áp. Nơi để thư giãn và tìm cảm giác bình yên trong không gian vô tận.",
        image: "fas fa-galaxy",
        website: "galaxy-universe.html",
        github: "#",
        tech: []
    }
];

function createProjectCard(project) {
    return `
        <div class="project-card" onclick="openProject('${project.website}')">
            <div class="project-image">
                <div class="project-overlay">
                    <div class="project-links">
                        <a href="${project.website}" class="project-link" target="_blank" onclick="event.stopPropagation()">
                            <i class="fas fa-external-link-alt"></i>
                            <span>Xem Website</span>
                        </a>
                        ${project.github !== '#' ? `<a href="${project.github}" class="project-link" target="_blank" onclick="event.stopPropagation()">
                            <i class="fab fa-github"></i>
                            <span>Source Code</span>
                        </a>` : ''}
                    </div>
                </div>
                <div class="project-placeholder">
                    <i class="${project.image}"></i>
                </div>
            </div>
            <div class="project-content">
                <h3>${project.title}</h3>
                <p>${project.description}</p>
                ${project.tech.length > 0 ? `<div class="project-tech">
                    ${project.tech.map(tech => `<span class="tech-tag">${tech}</span>`).join('')}
                </div>` : ''}
            </div>
        </div>
    `;
}

function openProject(url) {
    if (url && url !== '#') {
        window.open(url, '_blank');
    }
}

function loadProjects() {
    const projectsSection = document.getElementById('projects');
    const projectsGrid = document.querySelector('.projects-grid');
    
    if (projectsData.length > 0) {
        projectsSection.style.display = 'block';
        projectsGrid.innerHTML = projectsData.map(project => createProjectCard(project)).join('');
        
        // Animate project cards appearance
        setTimeout(() => {
            document.querySelectorAll('.project-card').forEach((item, index) => {
                item.style.transform = 'translateY(0) scale(1)';
                item.style.opacity = '1';
            });
        }, 100);
    } else {
        projectsSection.style.display = 'none';
    }
}

// Load projects when page loads
document.addEventListener('DOMContentLoaded', loadProjects);