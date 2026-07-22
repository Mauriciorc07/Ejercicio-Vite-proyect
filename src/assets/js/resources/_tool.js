const tools = [
    { name: "HTML5", image: "images/html.png" },
    { name: "CSS3", image: "images/css.png" },
    { name: "JavaScript", image: "images/javascript.png" },
    { name: "React", image: "images/react.png" },
    { name: "Node.js", image: "images/node.png" },
    { name: "PHP", image: "images/php.png" },
    { name: "MySQL", image: "images/mysql.png" },
    { name: "Git", image: "images/git.png" }
];

const container = document.querySelector(".tools-grid");

container.innerHTML = "";

tools.forEach(tool => {
    container.innerHTML += `
        <div class="tool-card">
            <img src="${tool.image}" alt="${tool.name}">
            <span>${tool.name}</span>
        </div>
    `;
});