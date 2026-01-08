document.querySelectorAll('.geri-sayim').forEach(el=>{
  const bitis = new Date(el.dataset.bitistarih).getTime();

  setInterval(()=>{
    const now = new Date().getTime();
    const fark = bitis - now;

    if(fark <= 0){
      el.innerHTML = "Süresi Doldu";
      return;
    }

    const gun = Math.floor(fark / (1000*60*60*24));
    const saat = Math.floor((fark / (1000*60*60)) % 24);
    const dk = Math.floor((fark / (1000*60)) % 60);

    el.innerHTML = `${gun}g ${saat}s ${dk}dk`;
  },1000);
});
