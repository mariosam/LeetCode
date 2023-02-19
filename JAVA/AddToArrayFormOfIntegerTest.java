/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;

import java.util.ArrayList;
import java.util.List;

import org.junit.Test;

public class AddToArrayFormOfIntegerTest {

    @Test
	public void testAddToArrayFormOfInteger() throws Exception {
        //Test 1
        List<Integer> want = new ArrayList<Integer>();
        want.add(1);
        want.add(2);
        want.add(3);
        want.add(4);
        List<Integer> got = AddToArrayFormOfInteger.addToArrayForm( new int[]{1,2,0,0}, 34 );
        assertArrayEquals(want.toArray(), got.toArray());
        //Test 2
        want = new ArrayList<Integer>();
        want.add(4);
        want.add(5);
        want.add(5);
        got = AddToArrayFormOfInteger.addToArrayForm( new int[]{2,7,4}, 181 );
        assertArrayEquals(want.toArray(), got.toArray());
        //Test 3
        want = new ArrayList<Integer>();
        want.add(1);
        want.add(0);
        want.add(2);
        want.add(1);
        got = AddToArrayFormOfInteger.addToArrayForm( new int[]{2,1,5}, 806 );
        assertArrayEquals(want.toArray(), got.toArray());
        //Test 4
        want = new ArrayList<Integer>();
        want.add(1);
        want.add(2);
        want.add(6);
        want.add(3);
        want.add(0);
        want.add(7);
        want.add(1);
        want.add(7);
        want.add(1);
        want.add(9);
        want.add(7);
        want.add(5);
        want.add(6);
        want.add(6);
        want.add(4);
        want.add(4);
        want.add(0);
        want.add(5);
        want.add(7);
        want.add(9);
        got = AddToArrayFormOfInteger.addToArrayForm( new int[]{1,2,6,3,0,7,1,7,1,9,7,5,6,6,4,4,0,0,6,3}, 516 );
        assertArrayEquals(want.toArray(), got.toArray());
        //Test 5
        want = new ArrayList<Integer>();
        want.add(3);
        want.add(8);
        want.add(0);
        want.add(3);
        want.add(0);
        want.add(2);
        want.add(7);
        want.add(0);
        want.add(7);
        want.add(6);
        want.add(4);
        want.add(9);
        want.add(9);
        want.add(1);
        want.add(7);
        want.add(6);
        want.add(6);
        want.add(8);
        want.add(3);
        want.add(4);
        got = AddToArrayFormOfInteger.addToArrayForm( new int[]{3,8,0,3,0,2,7,0,7,6,4,9,9,1,7,6,6,1,6,4}, 670 );
        assertArrayEquals(want.toArray(), got.toArray());
        //Test 6
        //want = new int[]{4,2,0,5,3,5,7,4,7,3,4,1,8,5,5,4,8,0,8,5,8,6,2,0,0,3,7,4,7,0,8,8,7,0,5,9,7,6,3,7,9,5,4,3,6,6,3,4,0,6};
        //got = AddToArrayFormOfInteger.addToArrayForm( new int[]{4,2,0,5,3,5,7,4,7,3,4,1,8,5,5,4,8,0,8,5,8,6,2,0,0,3,7,4,7,0,8,8,7,0,5,9,7,6,3,7,9,5,4,3,6,5,9,5,9,1}, 3815 );
        //assertArrayEquals(want.toArray(), got.toArray());
	}

}
