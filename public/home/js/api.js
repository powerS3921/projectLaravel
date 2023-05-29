// lista dostępnych walut
const currencies = ['PLN', 'USD', 'EUR', 'GBP'];

// funkcja pobierająca kurs waluty z API NBP
async function getExchangeRate(currency) {
  const response = await fetch(`http://api.nbp.pl/api/exchangerates/rates/a/${currency}/last/1/?format=json`);
  const data = await response.json();
  return data.rates[0].mid;
}

// funkcja konwertująca cenę na wybraną walutę
function convertPrice(price, exchangeRate) {
  return (price / exchangeRate).toFixed(2);
}

// funkcja obsługująca zmianę wybranej waluty
async function handleCurrencyChange(event) {
    const selectedCurrency = event.target.value;
    let exchangeRate;
  
    if (selectedCurrency === 'PLN') {
      exchangeRate = 1; // kurs wymiany PLN na PLN = 1
    } else {
      exchangeRate = await getExchangeRate(selectedCurrency);
    }
  
    const prices = document.querySelectorAll('.productPrice');
  
    prices.forEach(price => {
      const priceValue = parseFloat(price.dataset.price);
      if (!isNaN(priceValue)) {
        const convertedPrice = convertPrice(priceValue, exchangeRate);
        price.textContent = `${selectedCurrency} ${convertedPrice}`;
      }
    });
  }

// dodanie nasłuchiwania na zmianę wybranej waluty
const currencySelect = document.getElementById('priceSwitch');
currencySelect.addEventListener('change', handleCurrencyChange);
