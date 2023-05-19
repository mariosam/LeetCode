/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class BoatsToSavePeopleTest {

    @Test
	public void testBoatsToSavePeople() throws Exception {
        //Test 1
        int want = 1;
        int got = BoatsToSavePeople.numRescueBoats( new int[]{1,2}, 3 );
        assertEquals(want, got);
        //Test 2
        want = 3;
        got = BoatsToSavePeople.numRescueBoats( new int[]{3,2,2,1}, 3 );
        assertEquals(want, got);
        //Test 3
        want = 4;
        got = BoatsToSavePeople.numRescueBoats( new int[]{3,5,3,4}, 5 );
        assertEquals(want, got);
	}

}
