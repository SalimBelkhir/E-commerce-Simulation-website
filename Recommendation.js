document.addEventListener('DOMContentLoaded', () => {
    const userId = getUserIdFromSession(); 

    fetch(`recommendation.php?user_id=${userId}`)
        .then(response => response.json())
        .then(recommendations => {
            displayRecommendations(recommendations);
        })
        .catch(error => console.error('Error fetching recommendations:', error));
});

function displayRecommendations(recommendations) {
    const recommendationList = document.getElementById('recommendationList');
    recommendationList.innerHTML = ''; 
    recommendations.forEach(productId => {
        const productDiv = document.createElement('div');
        productDiv.className = 'product';
        productDiv.textContent = `Recommended Product ID: ${productId}`; 
        recommendationList.appendChild(productDiv);
    });
}

function getUserIdFromSession() {
    const name = "user_id=";
    const decodedCookie = decodeURIComponent(document.cookie);
    const ca = decodedCookie.split(';');
    for(let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
