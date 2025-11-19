#include "Vehicle.h"
#include "String_helper.h"

const char DELIMITER = ';';

Vehicle :: Vehicle(string registrationNumber, VehicleType type, int Seats, string companyName, double PricePerKm, 
Date PUCExpirationDate, long recordId):Storable(recordId){
 this -> registrationNumber = registrationNumber;
 this -> type = type;
 this -> seats = seats;
 this -> companyName = companyName;
 this -> PricePerKm = PricePerKm;
 this -> PUCExpirationDate = PUCExpirationDate;
}
string Vehicle :: getRegistrationNumber() const{return this -> registrationNumber;}
VehicleType Vehicle :: getVehicleType() const{return this -> type;}
int Vehicle :: getSeats() const{return this -> seats;}
string Vehicle :: getCompanyName() const{return this ->companyName;}
double Vehicle :: getPricePerKm() const{return this-> PricePerKm;}
Date Vehicle :: getPUCExpirationDate() const{return this-> PUCExpirationDate;}
void Vehicle :: setPricePerKm(double newPrice){this -> PricePerKm = newPrice;}
string Vehicle :: getVehicleTypeName() const{
    switch (this->type)
    {
    case VehicleType :: bike:
      return "Bike";
    case VehicleType :: car:
      return "Car";
    case VehicleType :: towera:
      return "Towera";
    default:
      return "";
    }
}
 void Vehicle :: display() const{
    cout<<"Vehicle Details:"<<endl;
    cout<<"Registration No:"<< this->registrationNumber <<endl;
    cout<<"Vehicle Type:"<< this->getVehicleTypeName() <<endl;
    cout<<"No of Seats:"<< this->seats <<endl;
    cout<<"Company Name:"<< this->companyName <<endl;
    cout<<"Price Per Km:"<< this->PricePerKm << "Rs/Km" <<endl;
    cout<<"PUC Expiration Date:"<< this->PUCExpirationDate.toString() <<endl;
 }
 string Vehicle ::toString() const{
    stringstream ss;
    ss << recordId << DELIMITER 
       << registrationNumber << DELIMITER
       << type << DELIMITER
       << seats << DELIMITER
       << companyName << DELIMITER
       << to_string(PricePerKm) << DELIMITER
       << PUCExpirationDate.toString();

       return ss.str();
 }
 void Vehicle :: setDataFrom(Storable*s){
    Vehicle*v = dynamic_cast<Vehicle*>(s);
    if (v)
    {
        this -> registrationNumber = v-> type;
        this -> type = v-> type;
        this -> seats = v-> seats;
        this -> companyName = v-> companyName;
        this -> PricePerKm = v-> PricePerKm;
        this -> PUCExpirationDate = v-> PUCExpirationDate;
    }    
 }