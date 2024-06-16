/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumIncrementToMakeArrayUniqueTest {

    @Test
	public void testMinimumIncrementToMakeArrayUnique() throws Exception {
        //Test 1
        int want = 1;
        int got =  MinimumIncrementToMakeArrayUnique.minIncrementForUnique( new int[]{1,2,2} );
        assertEquals(want, got);
        //Test 2
        want = 6;
        got =  MinimumIncrementToMakeArrayUnique.minIncrementForUnique( new int[]{3,2,1,2,1,7} );
        assertEquals(want, got);
	}

}
