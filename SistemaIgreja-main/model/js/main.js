const handleClick = () => {
    document.querySelector(".hamburger-bars").classList.toggle("active");
    document.querySelector(".ham-menu").classList.toggle("active");
  };
  const x = document.querySelector(".hamburger").addEventListener("click", handleClick);