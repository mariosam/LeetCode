/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;

import java.util.Arrays;

import org.junit.Test;

public class MinimumIndexOfValidSplitTest {

    @Test
	public void testMinimumIndexOfValidSplit() throws Exception {
        //Test 1
        int want = 2;
        int got =  MinimumIndexOfValidSplit.inimumIndex( Arrays.asList(1, 2, 2, 2) );
        assertEquals(want, got);
        //Test 2
        want = 4;
        got =  MinimumIndexOfValidSplit.inimumIndex( Arrays.asList(2,1,3,1,1,1,7,1,2,1) );
        assertEquals(want, got);
        //Test 3
        want = -1;
        got =  MinimumIndexOfValidSplit.inimumIndex( Arrays.asList(3,3,3,3,7,2,2) );
        assertEquals(want, got);
	}

}
