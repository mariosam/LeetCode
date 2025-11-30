/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class SmallestIntegerDivisibleByKTest {

    @Test
	public void testSmallestIntegerDivisibleByK() throws Exception {
        //Test 1
        int want = 1;
        int got = SmallestIntegerDivisibleByK.smallestRepunitDivByK( 1 );
        assertEquals(want, got);
        //Test 2
        want = -1;
        got = SmallestIntegerDivisibleByK.smallestRepunitDivByK( 2 );
        assertEquals(want, got);
        //Test 3
        want = 3;
        got = SmallestIntegerDivisibleByK.smallestRepunitDivByK( 3 );
        assertEquals(want, got);
	}

}
