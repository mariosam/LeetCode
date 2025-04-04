/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MaximumValueOfAnOrderedTripletITest {

    @Test
	public void testMaximumValueOfAnOrderedTripletI() throws Exception {
        //Test 1
        long want = 77;
        long got = MaximumValueOfAnOrderedTripletI.maximumTripletValue( new int[]{12,6,1,2,7} );
        assertEquals(want, got);
        //Test 2
        want = 133;
        got = MaximumValueOfAnOrderedTripletI.maximumTripletValue( new int[]{1,10,3,4,19} );
        assertEquals(want, got);
        //Test 3
        want = 0;
        got = MaximumValueOfAnOrderedTripletI.maximumTripletValue( new int[]{1,2,3} );
        assertEquals(want, got);
	}

}
