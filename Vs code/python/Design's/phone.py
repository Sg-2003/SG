import phonenumbers
from phonenumbers import geocoder
phone_number1 = phonenumbers.parse("+916205472377")
phone_number2 = phonenumbers.parse("+918409264327")
phone_number3 = phonenumbers.parse("+919122323778")
phone_number4 = phonenumbers.parse("+918540935283")

print("\nPhone Numbers Location\n")
print(geocoder.description_for_number(phone_number1,"en"))
print(geocoder.description_for_number(phone_number2,"en"))
print(geocoder.description_for_number(phone_number3,"en"))
print(geocoder.description_for_number(phone_number4,"en"))