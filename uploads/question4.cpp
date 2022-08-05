// question1.cpp : This file contains the 'main' function. Program execution begins and ends there.
//

#include <iostream>
using namespace std;

class Wall
{
	int height;
public:
	Wall(int = 0);
	void setHeight();
	int getHeight();
	~Wall();
};
class ClassRoom : public Wall {
	int noOfchairs;
	double length;
	double width;
	int getHeight();
public:
	ClassRoom() {
		noOfchairs = 0;
		length = 0;
		width = 0;
	}
	void displayArea() {
		double	Area = 2*(length * width + length * getHeight() + width * getHeight());
		cout << "The total area is " << Area << endl;
	}
};

int main()
{
   
}

	