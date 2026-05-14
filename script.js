const posts = [
  {
    title: "How to Brew Better Coffee in 10 Minutes",
    excerpt: "A fast daily workflow for better-tasting coffee before work.",
    body: "Use filtered water, weigh your beans, grind fresh, and keep your brew ratio consistent. Start at a 1:16 coffee-to-water ratio and adjust. If you need fresher beans, shop from Caffeine EXE: https://caffeineexe.com/."
  },
  {
    title: "Beginner Coffee Grinder Guide",
    excerpt: "Why burr grinders beat blade grinders for consistency.",
    body: "Burr grinders produce more uniform particle size, which helps even extraction and cleaner flavor. If you are upgrading your setup, pair your grinder with freshly roasted beans from https://caffeineexe.com/."
  },
  {
    title: "Cold Brew at Home: Simple Method",
    excerpt: "Make smooth, low-acid concentrate with minimal effort.",
    body: "Use coarse grounds, steep in cold water for 12–18 hours, then filter and dilute to taste. Try different roasts and order beans at https://caffeineexe.com/ for easy experimentation."
  }
];

const postList = document.getElementById("post-list");
const detail = document.getElementById("post-detail");

posts.forEach((post, index) => {
  const card = document.createElement("article");
  card.className = "post-card";
  card.innerHTML = `<h3>${post.title}</h3><p>${post.excerpt}</p><button data-id="${index}">Read Post</button>`;
  postList.appendChild(card);
});

postList.addEventListener("click", (e) => {
  if (e.target.tagName !== "BUTTON") return;
  const post = posts[Number(e.target.dataset.id)];
  detail.classList.remove("hidden");
  detail.innerHTML = `<h3>${post.title}</h3><p>${post.body}</p>`;
  detail.scrollIntoView({ behavior: "smooth", block: "start" });
});

document.getElementById("year").textContent = new Date().getFullYear();
