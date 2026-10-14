const menuToggle = document.querySelector('.menu-toggle');
const nav = document.querySelector('.nav');
menuToggle?.addEventListener('click', () => {
  const open = nav.classList.toggle('open');
  menuToggle.setAttribute('aria-expanded', String(open));
});
nav?.querySelectorAll('a').forEach(link => link.addEventListener('click', () => {
  nav.classList.remove('open');
  menuToggle?.setAttribute('aria-expanded', 'false');
}));

document.querySelectorAll('.filter').forEach(button => {
  button.addEventListener('click', () => {
    document.querySelectorAll('.filter').forEach(item => item.classList.remove('active'));
    button.classList.add('active');
    const filter = button.dataset.filter;
    document.querySelectorAll('.product-card').forEach(card => {
      card.hidden = filter !== 'all' && card.dataset.category !== filter;
    });
  });
});

let cartCount = 0;
document.querySelectorAll('.add-button').forEach(button => {
  button.addEventListener('click', () => {
    cartCount += 1;
    document.querySelector('#cart-count').textContent = cartCount;
    document.querySelector('#cart-message').textContent =
      `${button.dataset.product} added to your demo bag. Checkout is not connected.`;
  });
});

document.querySelector('#newsletter-form')?.addEventListener('submit', event => {
  event.preventDefault();
  const email = document.querySelector('#email').value.trim();
  document.querySelector('#newsletter-message').textContent =
    `Thanks! ${email} is entered in this demo only; no email was sent or stored.`;
  event.target.reset();
});

document.querySelector('#year').textContent = new Date().getFullYear();