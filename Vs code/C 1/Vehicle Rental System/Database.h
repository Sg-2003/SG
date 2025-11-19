#ifndef database_h
#define database_h
#include "Vehicle.h"
#include "User.h"
#include "Trip.h"
#include "Table.cpp"
#include "Error.cpp"
using namespace std;
class Database
{
private:
    Table <Vehicle>* vehicleTable;
    Table <User>* userTable;
    Table <Trip>* tripTable;
    void fetchAllVehicles()throw (IoError,MemoryError);
    void fetchAllUsers()throw (IoError,MemoryError);
    void fetchAllTrips()throw (IoError,MemoryError);
    void cleanUp();
public:
    Database()throw (MemoryError,IoError);
    ~Database();
    const Table<Vehicle>*const getVehicleRef()const;
    const Table<User>*const getUserRef()const;
    const Table<Trip>*const getTripRef()const;
    const Vehicle * const getVehicle(string registrationNo) const throw(NoSuchRecordError);
    const User * const getUser(string contactNo) const throw(NoSuchRecordError);
    const vector <const Vehicle*> getVehicle(Date startDate,Date EndDate, VehicleType type) const;

    template <class T> void addNewRecord (T*record)throw(IoError,MemoryError);
    template <class T> void updateRecord (T*record)throw(IoError,NoSuchRecordError);
};
#endif