using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Calculator

{
    public class calci
    {
        public double a, b, c;
        
        public double Add()
        {
            return a + b;
        }
        public double Sub()
        {
            return a - b;
        }
        public double Div()
        {
            return a / b;
        }
        public double Mul()
        {
            return a * b;
        }
        public double Fact()
        {
            int fac = 1; 
            for(int i = 1; i <= a; i++)
            {
                fac = fac * i;
            }
            return fac;
        }
        public bool ineq()
        {
            if (a < b + c && b < c + a && c < a + b)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        public void msg(int q=2)
        {
            Console.WriteLine("Enter first number: ");
            a = Convert.ToDouble( Console.ReadLine() );

            Console.WriteLine("Enter second number: ");
            b = Convert.ToDouble(Console.ReadLine());
        }
        public void msg(int q1 = 1, int q2= 2, int q3 = 3)
        {
            Console.WriteLine("Enter first number: ");
            a = Convert.ToDouble(Console.ReadLine());

            Console.WriteLine("Enter second number: ");
            b = Convert.ToDouble(Console.ReadLine());

            Console.WriteLine("Enter third number: ");
            c = Convert.ToDouble(Console.ReadLine());
        }
        public void msg()
        {
            Console.WriteLine("Enter number: ");
            a = Convert.ToDouble(Console.ReadLine());
        }
    }
    class Program
    {
        static void Main(string[] args)
        { 
            Char ch = 'A';
            while (ch != 0 || ch != 'e')
            {
                Console.WriteLine(
                    "\n" +
                    "\n" +
                    "\n" +
                    "\n"+
                    "---------------------------------------\n" +
                    "---------------------------------------\n" +
                    "Please Enter Your Choice: \n" +
                    "Enter 1 for Adding 2 numbers\n" +
                    "Enter 2 for Subtracting 2 numbers\n" +
                    "Enter 3 for Multliplying 2 numbers\n" +
                    "Enter 4 for Divding 2 Numbers\n" +
                    "Enter 5 for factorial of a number\n" +
                    "Enter 6 for check inequeality theorem of a triangle\n" +
                    "Enter 0 or e to exit\n" +
                    "---------------------------------------\n"+
                    "---------------------------------------\n");

                ch = Convert.ToChar(Console.ReadLine());

                calci c1 = new calci();
                switch (ch)
                {
                    case '1':
                        c1.msg(2);

                        Console.WriteLine($"{c1.a} + {c1.b} = " + c1.Add());
                        break;
                    case '2':
                        c1.msg(2);

                        Console.WriteLine($"{c1.a} - {c1.b} = " + c1.Sub());
                        break;
                    case '3':
                        c1.msg(2);

                        Console.WriteLine($"{c1.a} * {c1.b} = " + c1.Mul());
                        break;
                    case '4':
                        c1.msg(2);

                        Console.WriteLine($"{c1.a} / {c1.b} = " + c1.Div());
                        break;
                    case '5':
                        c1.msg();
                        Console.WriteLine($"Factorial of {c1.a} = " + c1.Fact()  );
                        break;
                    case '6':
                        c1.msg(1,3,3);

                        Console.WriteLine($"The Triangle with sides {c1.a}, {c1.b} and {c1.c} is: ");
                        if (c1.ineq() == true)
                        {
                            Console.WriteLine("::::  Valid ::::");
                        }
                        else
                        {
                            Console.WriteLine(":::: Invalid ::::");
                        }
                        break;
                    case '0':
                    case 'e':
                        Console.WriteLine("Exiting.........");
                        return;
                        
                    default:
                        break;
                }
            }
            //Console.ReadKey();
        }
    }
}
