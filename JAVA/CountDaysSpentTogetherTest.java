/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CountDaysSpentTogetherTest {

    @Test
	public void testCountDaysSpentTogether() throws Exception {
        //Test 1
        int want = 3;
        int got =  CountDaysSpentTogether.countDaysTogether( "08-15", "08-18", "08-16", "08-19" );
        assertEquals(want, got);
        //Test 2
        want = 0;
        got =  CountDaysSpentTogether.countDaysTogether( "10-01", "10-31", "11-01", "12-31" );
        assertEquals(want, got);
	}

}
