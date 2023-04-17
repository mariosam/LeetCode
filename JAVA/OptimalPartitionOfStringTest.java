/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class OptimalPartitionOfStringTest {

    @Test
	public void testOptimalPartitionOfString() throws Exception {
        //Test 1
        int want = 4;
        int got = OptimalPartitionOfString.partitionString( "abacaba" );
        assertEquals(want, got);
        //Test 2
        want = 6;
        got = OptimalPartitionOfString.partitionString( "ssssss" );
        assertEquals(want, got);
	}

}
