// Sample medicine data
const medicines = [
    {name :"Acetaminophen",category: "tablet"},
    {name :"Adderall",category: "tablet"},
    {name :"Amitriptyline",category: "tablet"},
    {name :"Amlodipine",category: "tablet"},
    {name :"Amoxicillin",category: "tablet"},
    {name :"Ativan",category: "tablet"},
    {name :"Atorvastatin",category: "tablet"},
    {name :"Azithromycin",category: "tablet"},
    {name :"Benzonatate",category: "tablet"},
    {name :"Brilinta",category: "tablet"},
    {name :"Bunavail",category: "tablet"},
    {name :"Buprenorphine",category: "tablet"},
    {name :"Cephalexin",category: "tablet"},
    {name :"Ciprofloxacin",category: "tablet"},
    {name :"Citalopram",category: "tablet"},
    {name :"Clindamycin",category: "tablet"},
    {name :"Clonazepam",category: "tablet"},
    {name :"Cyclobenzaprine",category: "tablet"},
    {name :"Cymbalta",category: "tablet"},
    {name :"Doxycycline",category: "tablet"},
    {name :"Dupixent",category: "tablet"},
    {name :"Entresto",category: "tablet"},
    {name :"Entyvio",category: "tablet"},
    {name :"Farxiga",category: "tablet"},
    {name :"Fentanyl Patch",category: "tablet"},
    {name :"Gabapentin",category: "tablet"},
    {name :"Gilenya",category: "tablet"},
    {name :"Humira",category: "tablet"},
    {name :"Hydrochlorothiazide",category: "tablet"},
    {name :"Hydroxychloroquine",category: "tablet"},
    {name :"Ibuprofen",category: "tablet"},
    {name :"Imbruvica",category: "tablet"},
    {name :"Invokana",category: "tablet"},
    {name :"Januvia",category: "tablet"},
    {name :"Jardiance",category: "tablet"},
    {name :"Kevzara",category: "tablet"},
    {name :"Lexapro",category: "tablet"},
    {name :"Lisinopril",category: "tablet"},
    {name :"Lofexidine",category: "tablet"},
    {name :"Loratadine",category: "tablet"},
    {name :"Lyrica",category: "tablet"},
    {name :"Melatonin",category: "tablet"},
    {name :"Meloxicam",category: "tablet"},
    {name :"Metformin",category: "tablet"},
    {name :"Methadone",category: "tablet"},
    {name :"Methotrexate",category: "tablet"},
    {name :"Metoprolol",category: "tablet"},
    {name :"Naloxone",category: "tablet"},
    {name :"Naltrexone",category: "tablet"},
    {name :"Naproxen",category: "tablet"},
    {name :"Narcan",category: "tablet"},
    {name :"Nurtec",category: "tablet"},
    {name :"Omeprazole",category: "tablet"},
    {name :"Onpattro",category: "tablet"},
    {name :"Otezla",category: "tablet"},
    {name :"Ozempic",category: "tablet"},
    {name :"Paracitamol",category: "tablet"},
    {name :"Pantoprazole",category: "tablet"},
    {name :"Prednisone",category: "tablet"},
    {name :"Probuphine",category: "tablet"},
    {name :"Rybelsus",category: "tablet"},
    {name :"secukinumab",category: "tablet"},
    {name :"Sublocade",category: "tablet"},
    {name :"Tramadol",category: "tablet"},
    {name :"Trazodone",category: "tablet"},
    {name :"Wegovy",category: "tablet"},
    {name :"Wellbutrin",category: "tablet"},
    {name :"Xanax",category: "tablet"},
    {name :"Zubsolv",category: "tablet"},
    {name :"Zinc sulfate",category: "tablet"},
    {name :"Zithromax",category: "tablet"},
    {name :"Zeposia",category: "tablet"},                  
    {name :"Iclusig",category: "tablet"},
    {name: "Ibuprofen", category: "tablet" },
    {name: "Injectafer", category: "tablet" },
    {name: "Cough Syrup", category: "syrup" },
    {name: "Antacid", category: "tablet" },
    {name: "Pain Relief Cream", category: "cream" },
];

// Function to filter and display suggestions
function showSuggestions() {
    const searchInput = document.getElementById("search-input");
    const suggestionsContainer = document.getElementById("suggestions-container");
    const category = document.getElementById("category").value;
    const searchTerm = searchInput.value.toLowerCase();

    // Clear previous suggestions
    suggestionsContainer.innerHTML = "";

    // Filter medicines based on category and search term
    const filteredMedicines = medicines.filter((medicine) => {
        return (
            (category === "all" || medicine.category === category) &&
            medicine.name.toLowerCase().startsWith(searchTerm)
        );
    });

    // Display suggestions
    filteredMedicines.forEach((medicine) => {
        const suggestion = document.createElement("div");
        suggestion.textContent = medicine.name;
        suggestion.classList.add("suggestion");
        suggestion.addEventListener("click", () => {
            redirectToAmazon(medicine.name);
        });
        suggestionsContainer.appendChild(suggestion);
    });

    // Show or hide suggestions container
    if (filteredMedicines.length > 0 && searchTerm.length > 0) {
        suggestionsContainer.style.display = "block";
    } else {
        suggestionsContainer.style.display = "none";
    }
}

// Function to redirect to Amazon
function redirectToAmazon(searchTerm) {
    window.location.href = "https://www.amazon.in/s?k=" + encodeURIComponent(searchTerm);
}

// Function to handle search button click
function searchMedicine() {
    const searchInput = document.getElementById("search-input");
    const searchTerm = searchInput.value.toLowerCase();
    redirectToAmazon(searchTerm);
}

// Function to debounce a function call
function debounce(func, delay) {
    let timeoutId;
    return function () {
        const context = this;
        const args = arguments;
        clearTimeout(timeoutId);
        timeoutId = setTimeout(function () {
            func.apply(context, args);
        }, delay);
    };
}


// Event listener for search input
document.getElementById("search-input").addEventListener("input", debounce(showSuggestions, 300));


// Event listener for category select
document.getElementById("category").addEventListener("change", showSuggestions);

// Event listener for search button click
document.getElementById("search-button").addEventListener("click", searchMedicine);

// Event listener for hiding suggestions when clicking outside
document.addEventListener("click", (event) => {
    const suggestionsContainer = document.getElementById("suggestions-container");
    if (!event.target.closest(".search-container")) {
        suggestionsContainer.style.display = "none";
    }
});
