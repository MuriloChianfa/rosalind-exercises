# ID:  HAMM
# RUN: R -q --vanilla -f counting-point-mutations.r

# settuping DNA letters
dna_letters = c("A", "T", "C", "G")

# creating function to generate a random DNA string
generate_dna_string <- function(bp) {
    return(sample(dna_letters, 1000, replace=TRUE))
}

# generating two string of dna
first_dna_string  <- generate_dna_string(1000)
second_dna_string <- generate_dna_string(1000)

# calculating the number of mutations points
mutations_points <- sum(first_dna_string != second_dna_string)

# show the number of mutations
mutations_points

