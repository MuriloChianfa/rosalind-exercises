
# Instantiating DNA Strings

s1 = "CCACCCTCGTGGTATGGCTAGGCATTCAGGAACCGGAGAACGCTTCAGACCAGCCCGGACTGGGAACCTGCGGGCAGTAGGTGGAAT"
s2 = "CCATCGGTAGCGCATCCTTAGTCCAATTAAGTCCCTATCCAGGCGCTCCGCCGAAGGTCTATATCCATTTGTCAGCAGACACGC"
s3 = "CCTGCGGAAGATCGGCACTAGAATAGCCAGAACCGTTTCTCTGAGGCTTCCGGCCTTCCCTCCCACTAATAATTCTGAGG"


# Creating an array of DNA String Sets
dna_strings = {"S1": s1,"S2": s2,"S3": s3}

#  Setting highest GC Count name and percentage variables
highest_gc_count_name = " "
highest_gc_count_percent = 0


# For every DNA String
for name, dna_string in dna_strings.items():
    # Reset Counters
    gc_counter = 0
    letter_counter = 0
    dna_string = dna_string.upper()

    # For every letter in DNA string
    for letter in dna_string:
        # Add letter to the total counter
        letter_counter += 1
        # Compares if letter is equal to G or C
        if(letter == "G" or letter == "C"):
            gc_counter += 1

    # Calculates GC Content percentage
    gc_content = gc_counter/letter_counter
    #print(gc_content)

    # Defines Highest gc content set
    if(gc_content > highest_gc_count_percent):
        highest_gc_count_name = name
        highest_gc_count_percent = gc_content

print(f"A string de DNA com o maior GC Content é a string {highest_gc_count_name} com {highest_gc_count_percent*100:.2f}%")

