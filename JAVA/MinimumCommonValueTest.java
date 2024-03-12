/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumCommonValueTest {

    @Test
	public void testMinimumCommonValue() throws Exception {
        //Test 1
        int want = 2;
        int got =  MinimumCommonValue.getCommon( new int[]{1,2,3}, new int[]{2,4} );
        assertEquals(want, got);
        //Test 2
        want = 2;
        got =  MinimumCommonValue.getCommon( new int[]{1,2,3,6}, new int[]{2,3,4,5} );
        assertEquals(want, got);
	}

}
