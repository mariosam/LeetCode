/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class SignOfTheProductOfAnArrayTest {

    @Test
	public void testSignOfTheProductOfAnArray() throws Exception {
        //Test 1
        int want = 1;
        int got = SignOfTheProductOfAnArray.arraySign( new int[]{-1,-2,-3,-4,3,2,1} );
        assertEquals(want, got);
        //Test 2
        want = 0;
        got = SignOfTheProductOfAnArray.arraySign( new int[]{1,5,0,2,-3} );
        assertEquals(want, got);
        //Test 3
        want = -1;
        got = SignOfTheProductOfAnArray.arraySign( new int[]{-1,1,-1,1,-1} );
        assertEquals(want, got);
	}

}
