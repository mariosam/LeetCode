/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CountTotalNumberOfColoredCellsTest {

    @Test
	public void testCountTotalNumberOfColoredCells() throws Exception {
        //Test 1
        long want =  1;
        long got = CountTotalNumberOfColoredCells.coloredCells( 1 );
        assertEquals(want, got);
        //Test 2
        want =  5;
        got = CountTotalNumberOfColoredCells.coloredCells( 2 );
        assertEquals(want, got);
	}

}
