#include <iostream>
using namespace std;

class ZHSUST {
  private:
    int teacher_age;

  public:
    void set_age(int s) {
      teacher_age = s;
    }
    int get_age() {
      return teacher_age;
    }
};

class student: public ZHSUST
{
    private:
    double student_gpa;

  public:
    void set_gpa(double g) {
      student_gpa = g;
    }
    double get_gpa() {
      return student_gpa;
    }
};

class teacher: public ZHSUST
{
  private:
    double salary;

  public:
    void setSalary(double s) {
      salary = s;
    }
    // Getter
    double getSalary() {
      return salary;
    }
};

int main() {
  ZHSUST myObj;
  myObj.set_age(27);
  cout << myObj.get_age()<<endl;

  student myObj2;
  myObj2.set_gpa(3.5);
  cout << myObj2.get_gpa()<<endl;

  teacher myObj3;
  myObj3.setSalary(50000);
  cout << myObj3.getSalary();
  return 0;
}
